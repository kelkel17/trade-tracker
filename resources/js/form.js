window.addEventListener('load', () => {
  const tradeDateField = document.getElementById('tradeDate');
  const isNormalTrade = document.getElementById('flexSwitchCheckDefault');
  const startTime = document.getElementById('tradeEntryTime');
  const closingTime = document.getElementById('tradeClosingTime');
  const today = new Date();

  tradeDateField.valueAsDate = today;

  let calculateClosingTime = () => {
    let getMinutes = startTime.value.split(':');
    let stringToInt = parseInt(getMinutes[1]);
    let closing = isNormalTrade.checked ? stringToInt + 5 : stringToInt + 14;
    closingTime.value = `${getMinutes[0].toString()}:${closing.toString()}`;
  }

  startTime.addEventListener('change', calculateClosingTime);
  isNormalTrade.addEventListener('change', calculateClosingTime);
});