document.addEventListener("DOMContentLoaded", function(event)
{
  var title = getParameterByName('ttl');
  var description = getParameterByName('desc');
  var bgColor = "#"+ getParameterByName('bgc');
  var textColor = "#"+ getParameterByName('txtc');

  document.getElementById('elTitle').innerHTML = title == null ? "Invalid" : title;
  document.getElementById('elDescription').innerHTML = description == null ? "Invalid" : description;

  var element = document.getElementById('element');
  element.style.color = textColor == null ? "#000" : textColor;
  element.style.background = bgColor == null ? "#ffc" : bgColor;

  var container = document.getElementById('elContainer');
  html2canvas(container, {
    onrendered: function(canvas) {
      document.body.appendChild(canvas);
    }
  });
});
