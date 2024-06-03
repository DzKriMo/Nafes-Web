let CurrentUserId;
let meetings = [];
let monthlyMeetings;
let weeklyMeetings;
let cancelledMeetings = [];
let RescheduledMeetings = [];
let doneMeetings = [];
let freq = [[], [], [], [], [], [], []];
let currentMonth = new Date().getMonth();
let currentYear = new Date().getFullYear();
let today = new Date().setHours(0, 0, 0, 0);

Date.prototype.getSundayWeek = function () {
  const firstDayOfYear = new Date(this.getFullYear(), 0, 1);
  const daysOffset = (firstDayOfYear.getDay() + 6) % 7; // Adjust to treat Sunday as the first day of the week
  const adjustedFirstDayOfYear = new Date(
    firstDayOfYear.setDate(firstDayOfYear.getDate() - daysOffset)
  );
  return Math.ceil(((this - adjustedFirstDayOfYear) / 86400000 + 1) / 7);
};

const currentDate = new Date();
let currentWeek = currentDate.getSundayWeek();

const meetingsnumb = document.getElementById("monthlyMeetings");
const meetingscan = document.getElementById("monthlyCancelled");
const meetingsdone = document.getElementById("monthlyDone");
const meetingsres = document.getElementById("monthlyRescheduled");
const startend = document.getElementById("startend");
const todaysHeader = document.getElementById("todaysHeader");
const todaysMeetingsContainer = document.getElementById(
  "todaysMeetingsContainer"
);
const latestUpdatesContainer = document.getElementById("notifications");
const modal = document.getElementById("meetingDetailsModal");
const modalContent = document.getElementById("meetingDetails");
const span = document.getElementsByClassName("close")[0];
const days = Array.from(document.querySelectorAll(".days > *"));

const csrfToken = document
  .querySelector('meta[name="csrf-token"]')
  .getAttribute("content");
axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;

axios
  .get("/api/user-id")
  .then((response) => {
    CurrentUserId = response.data.toString();
    return fetch(`/api/meeting/RetrieveTherapist/${CurrentUserId}`, {
      method: "GET",
    });
  })
  .then((response) => {
    if (response.status === 200) {
      return response.json();
    } else {
      throw new Error("Failed to retrieve meetings");
    }
  })
  .then((data) => {
    meetings = data.meetings;
    monthlyMeetings = meetings.filter((meeting) => {
      const meetingDate = new Date(meeting.start_time);
      return (
        meetingDate.getMonth() === currentMonth &&
        meetingDate.getFullYear() === currentYear
      );
    });

    console.log(meetings);

    weeklyMeetings = meetings.filter((meeting) => {
      const meetingDate = new Date(meeting.start_time);
      return (
        meetingDate.getSundayWeek() === currentWeek &&
        meetingDate.getFullYear() === currentYear
      );
    });

    const startDate = new Date(currentYear, 0, (currentWeek - 1) * 7 + 1);
    const endDate = new Date(currentYear, 0, currentWeek * 7);
    startend.innerText =
      startDate.toLocaleDateString() + " : " + endDate.toLocaleDateString();

    monthlyMeetings.forEach((meeting) => {
      if (meeting.status === "cancelled") {
        cancelledMeetings.push(meeting);
      } else if (meeting.status === "rescheduled") {
        RescheduledMeetings.push(meeting);
      } else if (meeting.status === "done") {
        doneMeetings.push(meeting);
      }
    });

    weeklyMeetings.forEach((meeting) => {
      const meetingDate = new Date(meeting.start_time);
      const dayOfWeek = meetingDate.getDay();
      freq[dayOfWeek].push(meeting);
    });

    for (let i = 0; i < days.length; i++) {
      freq[i].sort((a, b) => new Date(a.start_time) - new Date(b.start_time));
      freq[i].forEach((meeting) => {
        const meetingDiv = document.createElement("div");
        meetingDiv.className = "meeting-cell";
        meetingDiv.innerHTML = `<p class="${meeting.status}" onclick="showDetails(${meeting.id})">${meeting.status}</p>`;
        days[i].appendChild(meetingDiv);
      });
    }

    const numberOfMeetings = monthlyMeetings.length;
    meetingsnumb.textContent = numberOfMeetings;
    meetingscan.textContent = cancelledMeetings.length;
    meetingsdone.textContent = doneMeetings.length;
    meetingsres.textContent = RescheduledMeetings.length;

    const todaysMeetings = meetings.filter((meeting) => {
      const meetingDate = new Date(meeting.start_time).setHours(0, 0, 0, 0);
      return meetingDate === today;
    });

    todaysHeader.textContent = `Today - ${todaysMeetings.length} meetings`;
    todaysMeetings.forEach((meeting) => {
      const meetingDiv = document.createElement("div");
      meetingDiv.className = "meeting-card";
      meetingDiv.innerHTML = `
                <div class="meeting-content">
                    <img src="/img/5.png" alt="Client Image" class="clientt-image">
                    <div class="meeting-info">
                        <p class="client-name">${meeting.client_name}</p>
                        <p class="client-email">${meeting.client_email}</p>
                        <p class="meeting-time">${new Date(
                          meeting.start_time.replace("Z", "")
                        ).toLocaleTimeString()}</p>
                    </div>
                </div>
                <button class="details-btn" onclick="showDetails(${
                  meeting.id
                })">Show Details</button>
            `;
      todaysMeetingsContainer.appendChild(meetingDiv);
    });

    const latestUpdatedMeetings = meetings
      .sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at))
      .slice(0, 4);

    latestUpdatedMeetings.forEach((meeting) => {
      let action = meeting.status;
      if (action == "done") {
        action = "finished";
      }
      const meetingDiv = document.createElement("div");
      meetingDiv.className = "notification-card";
      meetingDiv.innerHTML = `
                <div class="notification-content" onclick="showDetails(${meeting.id})">
                    <img src="/img/5.png" alt="Client Image" class="client-image">
                    <p class="nott">${meeting.client_name} has ${action} a meeting</p>
                </div>
            `;
      latestUpdatesContainer.appendChild(meetingDiv);
    });

    initializePieChart();
  })
  .catch((error) => {
    console.error("Error:", error);
    if (error.response && error.response.status === 401) {
      window.location.href = "/loginpage";
    } else {
      console.error("Error retrieving user ID or meetings:", error);
    }
  });

  function showDetails(meetingId) {
    const meeting = meetings.find((m) => m.id === meetingId);
    if (meeting) {
      let buttonHtml = "";
      let statusColorClass = "";
      switch (meeting.status) {
        case "cancelled":
          statusColorClass = "status-red";
          break;
        case "rescheduled":
          statusColorClass = "status-blue";
          break;
        case "Scheduled":
          statusColorClass = "status-gray";
          break;
        case "done":
          statusColorClass = "status-green";
          break;
        default:
          statusColorClass = "";
          break;
      }
  
      if (meeting.status == "Scheduled" || meeting.status == "rescheduled") {
        buttonHtml = `
          <div class="updater-container" style="display: flex; justify-content: center; margin-top: 20px;">
            <button class="updater" onclick="update(${meetingId})" style="background-color: #68B2A0; margin:auto; border-radius: 14px; padding: 5px;">Mark as Done</button>
          </div>`;
      }
  
      const startTime = new Date(meeting.start_time.replace("Z", ""));
      const endTime = new Date(meeting.end_time.replace("Z", ""));
  
      modalContent.innerHTML = `
        <h2 class="cc" style="text-align:center"><strong>Meeting Details</strong></h2>
        <p class="cc"><strong>Client Name:</strong> ${meeting.client_name}</p>
        <p class="cc"><strong>Client Email:</strong> ${meeting.client_email}</p>
        <p class="cc"><strong>Start Time:</strong> ${startTime.toLocaleDateString()} ${startTime.toLocaleTimeString()}</p>
        <p class="cc"><strong>End Time:</strong> ${endTime.toLocaleDateString()} ${endTime.toLocaleTimeString()}</p>
        <p class="cc"><strong><span class="status-title">Status:</span></strong> <span class="${statusColorClass}">${meeting.status}</span></p>
        ${buttonHtml}
      `;
  
      modal.style.display = "block";
    } else {
      console.error("Meeting not found");
    }
  }
  
  
  

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

function initializePieChart() {
  const ctx = document.getElementById("myPieChart").getContext("2d");

  const labels = [
    "Meetings Done",
    "Cancelled meetings",
    "Rescheduled Meetings",
  ];
  const values = [
    doneMeetings.length,
    cancelledMeetings.length,
    RescheduledMeetings.length,
  ];

  const myPieChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Number of Meetings",
          data: values,
          backgroundColor: [
            "rgba(104, 178, 160)",
            "rgba(199, 0, 0)",
            "rgba(33, 122, 255)",
          ],
          borderColor: [
            "rgba(104, 178, 160)",
            "rgba(199, 0, 0)",
            "rgba(33, 122, 255)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "top",
        },
        tooltip: {
          callbacks: {
            label: function (tooltipItem) {
              return tooltipItem.label + ": " + tooltipItem.raw;
            },
          },
        },
      },
    },
  });
}

function changeWeek(offset) {
  for (let i = 0; i < days.length; i++) {
    days[i].innerHTML = "";
    freq[i] = [];
  }

  if (currentWeek == 52 && offset == 1) {
    currentWeek = 1;
    currentMonth = 0;
    currentYear++;
  } else if (currentWeek == 1 && offset == -1) {
    currentWeek = 52;
    currentMonth = 11;
    currentYear--;
  } else currentWeek += offset;
  console.log(currentWeek);
  let startDate = new Date(currentYear, 0, (currentWeek - 1) * 7);
  let endDate = new Date(currentYear, 0, currentWeek * 7 - 1);

  /* if (startDate.getFullYear() !== currentYear) {
        currentYear = startDate.getFullYear();
        currentMonth = startDate.getMonth();
    } else if (startDate.getMonth() !== currentMonth) {
        currentMonth = startDate.getMonth();
    }*/

  startend.innerText =
    startDate.toLocaleDateString() + " : " + endDate.toLocaleDateString();

  if (endDate.getFullYear() !== currentYear) {
    currentYear = endtDate.getFullYear();
    currentMonth = endtDate.getMonth();
  } else if (endDate.getMonth() !== currentMonth) {
    currentMonth = endDate.getMonth();
  }
  weeklyMeetings = meetings.filter((meeting) => {
    const meetingDate = new Date(meeting.start_time);
    return (
      meetingDate.getSundayWeek() === currentWeek &&
      meetingDate.getFullYear() === currentYear
    );
  });

  console.log(weeklyMeetings);
  weeklyMeetings.forEach((meeting) => {
    const meetingDate = new Date(meeting.start_time);
    const dayOfWeek = meetingDate.getDay();
    freq[dayOfWeek].push(meeting);
  });

  for (let i = 0; i < days.length; i++) {
    freq[i].sort((a, b) => new Date(a.start_time) - new Date(b.start_time));
    freq[i].forEach((meeting) => {
      const meetingDiv = document.createElement("div");
      meetingDiv.className = "meeting-cell";
      meetingDiv.innerHTML = `<p class="${meeting.status}" onclick="showDetails(${meeting.id})">${meeting.status}</p>`;
      days[i].appendChild(meetingDiv);
    });
  }
}

const container = document.getElementById("todaysMeetingsContainer");
const nextButton = document.getElementById("nextButton");
const prevButton = document.getElementById("prevButton");

nextButton.addEventListener("click", () => {
  container.scrollBy({ left: container.clientWidth, behavior: "smooth" });
});

prevButton.addEventListener("click", () => {
  container.scrollBy({ left: -container.clientWidth, behavior: "smooth" });
});

function update(meetingId) {
  const meeting = meetings.find((m) => m.id === meetingId);
  const formData = {
    therapist_id: meeting.therapist_id,
    client_id: meeting.client_id,
    client_name: meeting.client_name,
    client_email: meeting.client_email,
    start_time: meeting.start_time,
    end_time: meeting.end_time,
    duration: meeting.duration,
    meeting_type: meeting.type,
    status: "done",
  };

  fetch(`/api/meeting/update/${meetingId}`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",

      Accept: "application/json",
    },
    body: JSON.stringify(formData),
  })
    .then((response) => {
      if (response.status === 200) {
        alert("meeting marked as done successfully");
        location.reload();
        //  document.getElementById('registerationform').reset();
      } else {
        console.error("Failed to update:", response.statusText);

        alert("SAomething went wrong. Please try again later.");
      }
    })
    .catch((error) => {
      console.error("There was a problem with your fetch operation:", error);

      alert(
        "An error occurred while submitting the form. Please try again later."
      );
    });
}
