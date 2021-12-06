const updateTime = '6:00:10'; // UTC update time - if server update is slow you can increase it by a few mins or seconds 'hours:minutes:seconds' to reload when server data will be updated
const randomizeReload = 5;    // max random amount of seconds added to base reload (user site will be reloaded between 6:00:45 and 6:00:50)

((reloadTime) => {
  const remainingTime = () => {
    const [hours, minutes, seconds] = reloadTime.split(':').map(Number);
    const now = new Date();
    let ms = new Date(Date.UTC(
      now.getUTCFullYear(),
      now.getUTCMonth(),
      now.getUTCDate(),
      hours,
      minutes,
      seconds,
    )).valueOf() - now.valueOf();

    if (ms < 0) {
      ms += 86400000; // 86400000 ms = 24 hours
    }

    return ms + (Math.random() * (randomizeReload * 1000));
  }

  setTimeout(() => {
    location.reload();
  }, remainingTime());

})(updateTime);