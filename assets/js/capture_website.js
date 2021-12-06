import captureWebsite from 'capture-website';
const website = 'https://rdodailies.com/rdo.php';
const querySelector = '#daily-challenges-wrapper';

triggerAt(capture, '6:20:00', true);

async function capture() {
  try {
    return await captureWebsite.file(website, `dailies_${new Date().toISOString().split('T')[0]}.png`, {
      inputType: 'url',
      element: querySelector,
      type: 'png',
      delay: 1,
      overwrite: true,
    });
  } catch (err) {
    console.log(err);
  }
}

function triggerAt(callback, UTCtimeString = '', loop = false) {
  const [hours = 0, minutes = 0, seconds = 0] = UTCtimeString.split(':').map(Number);
  setTimeout(() => {
    callback();
    if (loop) {
      triggerAt(callback, UTCtimeString, loop);
    }
  }, (() => {
    const now = new Date();
    const ms = new Date(Date.UTC(
      now.getUTCFullYear(),
      now.getUTCMonth(),
      now.getUTCDate(),
      hours,
      minutes,
      seconds
    )).valueOf() - now.valueOf();

    return ms > 0 ? ms : ms + 86400000;
  })());
}
