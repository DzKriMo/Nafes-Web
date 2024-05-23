<x-app-layout>
  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="/css/dashboard.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
    <div id="big">


        <div id="left">
         
            <h1 class="mettingsHeader">Meetings:</h1>
            <div id="meetings">


                <div class="nomeetings">
                    <svg id="cam" width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.676514" width="79.647" height="79.647" rx="39.8235" fill="white"/>
                        <g clip-path="url(#clip0_843_657)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.1188 50.6699H28.1905C25.992 50.6699 24.2109 48.8889 24.2109 46.6904V34.3097C24.2109 32.1112 25.992 30.3301 28.1905 30.3301H42.1188C44.3173 30.3301 46.0983 32.1112 46.0983 34.3097V46.6904C46.0983 48.8889 44.3173 50.6699 42.1188 50.6699Z" stroke="#8C8C8C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M46.0977 42.4403L52.8098 47.8418C54.1115 48.8906 56.0465 47.9638 56.0465 46.2924V34.7076C56.0465 33.0362 54.1115 32.1094 52.8098 33.1582L46.0977 38.5598" stroke="#8C8C8C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_843_657">
                        <rect width="43" height="43" fill="white" transform="translate(19 19)"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <div class="nomeetingsdata">
                            <h5 class="headerr">No. of meetings</h5>
                            <div class="meetingsection">
                                <p id="monthlyMeetings">0</p>
                                <p class="month">this month</p>

                            </div>
                        </div>   
                </div>


                <div class="sepr"></div>




                <div class="nomeetings">
                    <svg id="cal" width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.676514" width="79.647" height="79.647" rx="39.8235" fill="white"/>
                        <path d="M32.7432 41.4234C32.7432 40.7046 33.3259 40.122 34.0446 40.122H34.0567C34.7754 40.122 35.3581 40.7046 35.3581 41.4234C35.3581 42.1421 34.7754 42.7248 34.0567 42.7248H34.0446C33.3259 42.7248 32.7432 42.1421 32.7432 41.4234Z" fill="#217AFF"/>
                        <path d="M38.5303 41.4234C38.5303 40.7046 39.1129 40.122 39.8317 40.122H39.8437C40.5625 40.122 41.1452 40.7046 41.1452 41.4234C41.1452 42.1421 40.5625 42.7248 39.8437 42.7248H39.8317C39.1129 42.7248 38.5303 42.1421 38.5303 41.4234Z" fill="#217AFF"/>
                        <path d="M44.3053 41.4234C44.3053 40.7046 44.8879 40.122 45.6067 40.122H45.6187C46.3375 40.122 46.9202 40.7046 46.9202 41.4234C46.9202 42.1421 46.3375 42.7248 45.6187 42.7248H45.6067C44.8879 42.7248 44.3053 42.1421 44.3053 41.4234Z" fill="#217AFF"/>
                        <path d="M32.7432 46.4814C32.7432 45.7626 33.3259 45.18 34.0446 45.18H34.0567C34.7754 45.18 35.3581 45.7626 35.3581 46.4814C35.3581 47.2001 34.7754 47.7828 34.0567 47.7828H34.0446C33.3259 47.7828 32.7432 47.2001 32.7432 46.4814Z" fill="#217AFF"/>
                        <path d="M38.5303 46.4814C38.5303 45.7626 39.1129 45.18 39.8317 45.18H39.8437C40.5625 45.18 41.1452 45.7626 41.1452 46.4814C41.1452 47.2001 40.5625 47.7828 39.8437 47.7828H39.8317C39.1129 47.7828 38.5303 47.2001 38.5303 46.4814Z" fill="#217AFF"/>
                        <path d="M44.3053 46.4814C44.3053 45.7626 44.8879 45.18 45.6067 45.18H45.6187C46.3375 45.18 46.9202 45.7626 46.9202 46.4814C46.9202 47.2001 46.3375 47.7828 45.6187 47.7828H45.6067C44.8879 47.7828 44.3053 47.2001 44.3053 46.4814Z" fill="#217AFF"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.3878 26.7049C46.3878 25.9861 45.8051 25.4034 45.0864 25.4034C44.3676 25.4034 43.7849 25.9861 43.7849 26.7049V27.4585H35.8747V26.7049C35.8747 25.9861 35.2921 25.4034 34.5733 25.4034C33.8546 25.4034 33.2719 25.9861 33.2719 26.7049V27.5088C31.5555 27.6777 30.0371 28.2767 28.8866 29.3704C27.4966 30.6917 26.8105 32.5763 26.8105 34.8025V46.5799C26.8105 48.8307 27.4927 50.7394 28.8775 52.0817C30.2559 53.4176 32.1678 54.0346 34.321 54.0346H45.3285C47.4809 54.0346 49.3909 53.4308 50.7695 52.1146C52.1571 50.7896 52.839 48.9025 52.839 46.6783V34.8048C52.8455 32.5803 52.167 30.6946 50.7792 29.3717C49.6295 28.2756 48.1089 27.6767 46.3878 27.5084V26.7049ZM43.7849 30.0614V30.9876C43.7849 31.7063 44.3676 32.289 45.0864 32.289C45.8051 32.289 46.3878 31.7063 46.3878 30.9876V30.1276C47.5321 30.2803 48.3877 30.6879 48.9833 31.2556C49.7382 31.9752 50.2413 33.1102 50.2361 34.7985L50.2361 34.8025V35.0395H29.4134V34.8025C29.4134 33.1152 29.9209 31.9785 30.6799 31.2569C31.2778 30.6886 32.1332 30.2814 33.2719 30.1283V30.9876C33.2719 31.7063 33.8546 32.289 34.5733 32.289C35.2921 32.289 35.8747 31.7063 35.8747 30.9876V30.0614H43.7849ZM29.4134 37.6424V46.5799C29.4134 48.3041 29.9249 49.472 30.689 50.2126C31.4597 50.9596 32.6523 51.4317 34.321 51.4317H45.3285C47.01 51.4317 48.2045 50.9649 48.972 50.232C49.7304 49.5079 50.2361 48.3676 50.2361 46.6783V37.6424H29.4134Z" fill="#217AFF"/>
                        </svg>
                        
                        <div class="nomeetingsdata">
                            <h5 class="headerr">Rescheduled meetings</h5>
                            <div class="meetingsection">
                                <p id="monthlyRescheduled">0</p>
                                <p class="month">this month</p>

                            </div>
                        </div>   
                </div>




                <div class="sepr"></div>




                <div class="nomeetings">
                    <svg id="can" width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.676514" width="79.647" height="79.647" rx="39.8235" fill="white"/>
                        <path d="M39.824 25.9241C36.9411 25.9241 34.123 26.7789 31.726 28.3806C29.329 29.9822 27.4608 32.2586 26.3576 34.922C25.2544 37.5854 24.9657 40.5162 25.5281 43.3436C26.0905 46.1711 27.4788 48.7682 29.5172 50.8067C31.5557 52.8452 34.1529 54.2334 36.9803 54.7958C39.8078 55.3582 42.7385 55.0696 45.4019 53.9664C48.0653 52.8632 50.3418 50.9949 51.9434 48.5979C53.545 46.2009 54.3999 43.3828 54.3999 40.5C54.3999 36.6342 52.8642 32.9268 50.1307 30.1933C47.3972 27.4597 43.6897 25.9241 39.824 25.9241ZM27.07 40.5C27.0709 37.4353 28.1808 34.4745 30.1948 32.1644L48.1596 50.1292C46.312 51.7246 44.0453 52.7564 41.6288 53.1018C39.2122 53.4472 36.7473 53.0919 34.5267 52.078C32.3061 51.0641 30.4231 49.4343 29.1014 47.3819C27.7796 45.3296 27.0746 42.9411 27.07 40.5ZM49.4532 48.8356L31.4884 30.8708C33.9329 28.8283 37.0533 27.7745 40.2356 27.9168C43.418 28.059 46.4319 29.3871 48.6844 31.6396C50.9369 33.8921 52.2649 36.906 52.4072 40.0883C52.5495 43.2707 51.4957 46.3911 49.4532 48.8356Z" fill="#C70000"/>
                        </svg>
                        
                        
                        <div class="nomeetingsdata">
                            <h5 class="headerr">Cancelled meetings </h5>
                            <div class="meetingsection">
                                <p id="monthlyCancelled">0</p>
                                <p class="month">this month</p>

                            </div>
                        </div>   
                </div>




                <div class="sepr"></div>




                <div class="nomeetings">
                    <svg id="done" width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.676514" width="79.647" height="79.647" rx="39.8235" fill="white"/>
                        <path d="M53.224 39.1096V33.1332C53.224 28.1529 51.2319 26.1608 46.2515 26.1608H40.2752C35.2949 26.1608 33.3027 28.1529 33.3027 33.1332V34.6984H37.7139C42.6942 34.6984 44.6863 36.6906 44.6863 41.6709V46.082H46.2515C51.2319 46.082 53.224 44.0899 53.224 39.1096Z" stroke="#68B2A0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M44.6869 47.6472V41.6709C44.6869 36.6905 42.6947 34.6984 37.7144 34.6984H31.7381C26.7577 34.6984 24.7656 36.6905 24.7656 41.6709V47.6472C24.7656 52.6275 26.7577 54.6197 31.7381 54.6197H37.7144C42.6947 54.6197 44.6869 52.6275 44.6869 47.6472Z" stroke="#68B2A0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30.5723 44.6591L33.347 47.4339L38.8823 41.8844" stroke="#68B2A0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                        
                        
                        <div class="nomeetingsdata">
                            <h5 class="headerr">Done meetings </h5>
                            <div class="meetingsection">
                                <p id="monthlyDone">0</p>
                                <p class="month">this month</p>

                            </div>
                        </div>   
                </div>


            </div>

            <div id="todayyy">
                <h2 id="todaysHeader">Today-0 meetings</h2>
            
                <div id="sliders">  
                    <button id="prevButton"><svg  width="21.5" height="16" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="41.5" height="31" rx="7.5" stroke="#C5C5C5" stroke-opacity="0.5"/>
                        <path d="M24.3008 23.92L17.7808 17.4C17.0108 16.63 17.0108 15.37 17.7808 14.6L24.3008 8.08" stroke="#202020" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></button>
                    <button id="nextButton" ><svg  width="21.5" height="16" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="0.5" width="41.5" height="31" rx="7.5" stroke="#C5C5C5" stroke-opacity="0.5"/>
                        <path d="M18.6992 8.08L25.2192 14.6C25.9892 15.37 25.9892 16.63 25.2192 17.4L18.6992 23.92" stroke="#202020" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></button>    
                </div>
            
            </div>
            

            <div id="todaysMeetingsContainer"></div>

           
            <div id="monthHeader" >
               <div id="week">
                <h2 >Weekly meetings: </h2>
                <p id="startend"></p>
            
            </div> 
            <div id="buttonscont">
                <button onclick="changeWeek(-1)"><svg  width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="41.5" height="31" rx="7.5" stroke="#C5C5C5" stroke-opacity="0.5"/>
                    <path d="M24.3008 23.92L17.7808 17.4C17.0108 16.63 17.0108 15.37 17.7808 14.6L24.3008 8.08" stroke="#202020" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></button>
                <button onclick="changeWeek(1)"><svg  width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="0.5" width="41.5" height="31" rx="7.5" stroke="#C5C5C5" stroke-opacity="0.5"/>
                    <path d="M18.6992 8.08L25.2192 14.6C25.9892 15.37 25.9892 16.63 25.2192 17.4L18.6992 23.92" stroke="#202020" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></button>
                    
            </div>
               
                        
                    
            </div>
                
           
    
            <table>
                <tr>
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
             
                <tr class="days">
                   <td id="1"></td>
                   <td id="2"></td>
                   <td id="3"></td>
                   <td id="4"></td>
                   <td id="5"></td>
                   <td id="6"></td>
                   <td id="7"></td>
                </tr>
            </table>
            
           
            
            
            
          
            <div id="meetingDetailsModal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <div id="meetingDetails"></div>
              </div>
            </div>


        </div>
   

        <div id="right">
            <h1 class="mettingsHeader">Notifications:</h1>
            <div id="notifications"></div>
            <canvas id="myPieChart"  ></canvas>
          
        </div>
    </div>
      



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js"></script>
    <script src="/js/dashboard.js"></script>
    
    </body>
    </html>
    
  
</x-app-layout>
