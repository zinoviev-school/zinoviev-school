import Plyr from 'plyr';

const players = new Plyr(document.querySelector('.js-player'), {
title: 'Example Title',
});


const options = {
   fullscreen: {
     enabled: true,
     iosNative: false
   },
   loop: {
     active: true 
   },
   controls: [
     
   ],
   restart: true,
   autoplay: true,
   muted: true,
   storage: { enabled: false }
 };
 
 const optionsIOS = {
   ...options,
   fullscreen: {
     enabled: true,
     iosNative: true,
     
   }
 };
 const player = new Plyr(document.querySelector(".player"), options);
 
 const playerIOS = new Plyr(document.querySelector(".player-ios"), optionsIOS);