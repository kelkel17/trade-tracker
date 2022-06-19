import flatpickr from "flatpickr";

window.addEventListener('load', () => {
  let additionalClosingTime = 5;
  let isNormal = true;
  let hours;
  let minutes;
  let updateClosingTime = () => {
    document.getElementById('closing-time').disabled = false
    let openingDateTime = new Date(new Date().getTime());
    openingDateTime.setHours(hours, (minutes + additionalClosingTime), 0, 0);
    openingDateTime.toLocaleString('en-SG', {
      timeZone: 'Asia/Singapore',
      hour12: false
    });
    let displayMinutes = openingDateTime.getMinutes() < 10 ? '0' + openingDateTime.getMinutes() : openingDateTime.getMinutes();
    document.getElementById('closing-time').value = `${openingDateTime.getHours()}:${displayMinutes}`;
    initializeClosingTimePicker(displayMinutes);
  }

  let initializeClosingTimePicker = displayMinutes => {
    let closingTimePicker = flatpickr('.closing-time', {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      minuteIncrement: 1,
      allowInput: true,
      defaultHour: "22",
      defaultMinute: `${displayMinutes}`,
      minTime: "00:00",
      maxTime: "23:59",
      time_24hr: true,
    });
  }

  document.getElementById('is-normal-trade').addEventListener('change', (event) => {
    if (!event.target.checked) {
      additionalClosingTime = 14
      isNormal = false;
    } else {
      additionalClosingTime = 5;
    }

    if (minutes != null) {
      updateClosingTime();
    }
  });

  if (document.querySelector('.datepicker')) {
    flatpickr('.datepicker', {
      defaultDate: "today",
    });
  }

  if (document.querySelector('.timepicker')) {
    flatpickr('.opening-time', {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      minuteIncrement: 1,
      allowInput: true,
      defaultHour: "21",
      time_24hr: true,
      minTime: "00:00",
      maxTime: "23:59",
      onValueUpdate: (event) => {
        hours = event[0].getHours();
        minutes = event[0].getMinutes();
        updateClosingTime();
      }
    });
  }
});
