let ytReady = false,
    timer = null,
    player = null;

// YouTube Video API
function onYouTubeIframeAPIReady() {
  player = new YT.Player('yt-player', {
    height: '560',
    width: '315',
    videoId: '_jHpnb-QmTA',
    origin: 'http://www.youtube.com',
    events: {
      'onReady': () => { ytReady = true; },
    }
  });
}

$(() => {

  const images = $('.images img.showcase').each(function () {

    // Copy image alt attribute for Showcase Info Box
    const elem = $(this);
    elem.attr('data-showcase-info', elem.attr('alt'));

  }),
        video = $('video.showcase').clone().prop('controls', true),
        youtube = $('#yt-player'),
        data = { width: 400 };

  // Images
  $('.images img.showcase').on('click', function () {

    images.showcase({
      currentIndex: images.index(this),
    });

  });

  // Videos
  $('video.showcase').on('click', function () {

    // Check if video is already Showcased
    if (Showcase.content[0]
        && Showcase.content[0].currentSrc === video[0].currentSrc) {
      Showcase.enable();
    } else {
      video.showcase();
    }

  });

  // Pause YouTube video on Showcase disable
  Showcase.on('disable', () => {

    try {
      player.pauseVideo();
    } catch (e) {
      console.log(e.message);
    }

  });

  $('.youtube').on('click', function () {

    const opts = {
      width: 560,
      height: 315,
      forceScaling: true,
    };

    if (ytReady) {

      youtube.showcase(opts);

    } else {

      // Showcase video with a Promise when video is ready
      opts.promise = new Promise((resolve, reject) => {

        let tries = 0,
            clear = () => {
              clearInterval(timer);
              timer = null;
            };

        clear();
        timer = setInterval(() => {

          tries += 1;
          if (ytReady) {

            // Video is ready
            resolve();

          } else if (tries > 10) {

            // Too many attempts to load video
            clear();
            reject('Failed to load video.');

          }

        }, 1000);

      });
      youtube.showcase(opts);

    }

  });

  // Data
  $('.html').on('click', function () {

    $('<div><h3>Document Ipsum</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum dui cursus vestibulum vehicula. Suspendisse commodo fringilla erat, sit amet mattis justo finibus eget.</p><p>Vestibulum pulvinar facilisis elit ac laoreet. Morbi vel felis sed neque tincidunt venenatis a id tortor. Nulla mauris elit, ornare eget risus ut, aliquet hendrerit urna. Phasellus sapien lectus, efficitur a aliquet sit amet, vestibulum a arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>')
      .showcase(data);

  });
  $('a.showcase').on('click', function (e) {

    e.preventDefault();
    $(this).showcase(data);

  });

  // Popups
  $('.popup').on('click', function () {

    switch ($(this).data('type')) {
      case 'alert':
        Showcase.alert('Have a blessed day!');
        break;
      case 'confirm':
        Showcase.confirm('Do you like jQuery?', ['YES', 'NO'], function (res) {

          // Showcase closes after 5 seconds (expire)
          if (res === true) {
            Showcase.alert('Awesome!', null, null, 5);
          } else if (res === false) {
            Showcase.alert('To each their own.', null, null, 5);
          }

        });
        break;
      case 'prompt':
        Showcase.prompt('What is your name?', 'OK', $('<textarea></textarea>'), function (res) {

          if (res !== null) {
            Showcase.alert(`You entered: <br>${$('<p></p>').text(res).html()}`, null);
          }

        });
        break;
    }

  });

});