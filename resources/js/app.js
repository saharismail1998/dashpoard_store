require('./bootstrap');
window.Echo.private('Notification').notification((event)=>{
    alert(event.title + ": "+ event.body);
});
