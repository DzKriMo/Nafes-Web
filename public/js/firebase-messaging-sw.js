const messaging = firebase.messaging();

// Optional: Add an event listener to handle background messages
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('Received background message:', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/img/log.png'
  };

  return self.registration.showNotification(notificationTitle, notificationOptions);
});