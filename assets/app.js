import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './bideo.js'
console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


(function () {

    var bv = new Bideo();
    bv.init({
      // Video element
      videoEl: document.querySelector('#background_video'),
  
      // Container element
      container: document.querySelector('body'),
  
      // Resize
      resize: true,
  
      // autoplay: false,
  
      isMobile: window.matchMedia('(max-width: 768px)').matches,  
      // Array of objects containing the src and type
      // of different video formats to add
      src: [
        {
          src: "video/night.mp4",
          type: 'video/mp4'
        },
        {
          src: "video/night.webm",
          type: 'video/webm;codecs="vp8, vorbis"'
        }
      ],
  
      // What to do once video loads (initial frame)
      // onLoad: function () {
      //   document.querySelector('#video_cover').style.display = 'none';
      // }
    });
  }());
  