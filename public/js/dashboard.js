let CurrentUserId;
let meetings = [];
let monthlyMeetings;
let cancelledMeetings = [];
let RescheduledMeetings = [];
let doneMeetings = [];
const meetingsnumb = document.getElementById("monthlyMeetings");
const meetingscan = document.getElementById("monthlyCancelled");
const meetingsdone = document.getElementById("monthlyDone");
const meetingsres = document.getElementById("monthlyRescheduled");

const todaysHeader = document.getElementById("todaysHeader");
const todaysMeetingsContainer = document.getElementById("todaysMeetingsContainer");
const modal = document.getElementById("meetingDetailsModal");
const modalContent = document.getElementById("meetingDetails");
const span = document.getElementsByClassName("close")[0];

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;

axios.get('/api/user-id')
    .then(response => {
        CurrentUserId = response.data.toString();
        console.log(CurrentUserId);

        return fetch(`/api/meeting/RetrieveTherapist/${CurrentUserId}`, {
            method: 'GET',
        });
    })
    .then(response => {
        if (response.status === 200) {
            return response.json();
        } else {
            throw new Error('Failed to retrieve meetings');
        }
    })
    .then(data => {
        console.log('Response Body:', data);
        meetings = data.meetings;

        const currentMonth = new Date().getMonth();
        const currentYear = new Date().getFullYear();
        const today = new Date().setHours(0, 0, 0, 0);

        monthlyMeetings = meetings.filter(meeting => {
            const meetingDate = new Date(meeting.start_time);
            return meetingDate.getMonth() === currentMonth && meetingDate.getFullYear() === currentYear;
        });

        monthlyMeetings.forEach(meeting => {
            if (meeting.status === "cancelled") {
                console.log("Cancelled Meeting:", meeting);
                cancelledMeetings.push(meeting);
            } else if (meeting.status == "rescheduled") {
                console.log("Rescheduled Meeting:", meeting);
                RescheduledMeetings.push(meeting);
            } else if (meeting.status == "done") {
                console.log("Done Meeting:", meeting);
                doneMeetings.push(meeting);
            }
        });

        const numberOfMeetings = monthlyMeetings.length;
        console.log(`Number of meetings this month: ${numberOfMeetings}`);
        meetingsnumb.textContent = numberOfMeetings;
        meetingscan.textContent = cancelledMeetings.length;
        meetingsdone.textContent = doneMeetings.length;
        meetingsres.textContent = RescheduledMeetings.length;

        const todaysMeetings = meetings.filter(meeting => {
            const meetingDate = new Date(meeting.start_time).setHours(0, 0, 0, 0);
            return meetingDate === today;
        });

        todaysHeader.textContent = `Today-${todaysMeetings.length} meetings`;
        todaysMeetings.forEach(meeting => {
            const meetingDiv = document.createElement('div');
            meetingDiv.className = 'meeting-card';
            meetingDiv.innerHTML = `
                <div class="meeting-content">
                    <img src="/img/55.png" alt="Client Image" class="client-image">
                    <div class="meeting-info">
                        <p class="client-name">${meeting.client_name}</p>
                        <p class="client-email">${meeting.client_email}</p>
                        <p class="meeting-time">${new Date(meeting.start_time).toLocaleTimeString()}</p>
                    </div>
                </div>
                <button class="details-btn" onclick="showDetails(${meeting.id})">Show Details</button>
            `;
            todaysMeetingsContainer.appendChild(meetingDiv);
        });

        // Initialize pie chart after data processing
        initializePieChart();
    })
    .catch(error => {
        console.error('Error:', error);
        if (error.response && error.response.status === 401) {
            window.location.href = '/loginpage';
        } else {
            console.error('Error retrieving user ID or meetings:', error);
        }
    });

function showDetails(meetingId) {
    const meeting = meetings.find(m => m.id === meetingId);
    if (meeting) {
        modalContent.innerHTML = `
            <h2 class="cc">Meeting Details</h2>
            <p class="cc">Client Name: ${meeting.client_name}</p>
            <p class="cc">Client Email: ${meeting.client_email}</p>
            <p class="cc">Start Time: ${new Date(meeting.start_time).toLocaleString()}</p>
            <p class="cc">End Time: ${new Date(meeting.end_time).toLocaleString()}</p>
            <p class="cc">Note: ${meeting.note}</p>
        `;
        modal.style.display = "block";
    } else {
        console.error('Meeting not found');
    }
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

function initializePieChart() {
    const ctx = document.getElementById('myPieChart').getContext('2d');

    const labels = ["Meetings Done", "Cancelled meetings", "Rescheduled Meetings"];
    const values = [doneMeetings.length, cancelledMeetings.length, RescheduledMeetings.length];

    const myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: 'Number of Meetings',
                data: values,
                backgroundColor: [
                    'rgba(104, 178, 160)',
                    'rgba(199, 0, 0)',
                    'rgba(33, 122, 255)'
                ],
                borderColor: [
                    'rgba(104, 178, 160)',
                    'rgba(199, 0, 0))',
                    'rgba(33, 122, 255)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });
}
