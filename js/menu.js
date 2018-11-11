$( document ).ready(function() {
  putMenu()
});


function putMenu()
{var textString="";
textString = textString +"<nav class='navbar navbar-default'>";
textString = textString +"  <div class='container-fluid'>";

textString = textString +"    <div class='navbar-header'>";
textString = textString +"      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>";
textString = textString +"        <span class='sr-only'>Toggle navigation</span>";
textString = textString +"        <span class='icon-bar'></span>";
textString = textString +"        <span class='icon-bar'></span>";
textString = textString +"        <span class='icon-bar'></span>";

textString = textString +"      </button>";
textString = textString +"      <a class='navbar-brand' href='#'>Thirsty Five Home Brewing</a>";
textString = textString +"    </div>";


textString = textString +"    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>";
textString = textString +"      <ul class='nav navbar-nav'>";
textString = textString +"        <li class='active'><a href='#'>Link <span class='sr-only'>(current)</span></a></li>";
textString = textString +"        <li><a href='#'>Link</a></li>";
textString = textString +"        <li class='dropdown'>";
textString = textString +"          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>";
textString = textString +"          <ul class='dropdown-menu'>";
textString = textString +"            <li><a href='#'>Action</a></li>";
textString = textString +"            <li><a href='#'>Something else here</a></li>";
textString = textString +"            <li><a href='#'>Another action</a></li>";
textString = textString +"            <li role='separator' class='divider'></li>";
textString = textString +"            <li><a href='#'>Separated link</a></li>";
textString = textString +"            <li role='separator' class='divider'></li>";
textString = textString +"            <li><a href='#'>One more separated link</a></li>";
textString = textString +"          </ul>";
textString = textString +"        </li>";
textString = textString +"      </ul>";
textString = textString +"      <form class='navbar-form navbar-left'>";
textString = textString +"        <div class='form-group'>";
textString = textString +"          <input type='text' class='form-control' placeholder='Search'>";
textString = textString +"        </div>";
textString = textString +"        <button type='submit' class='btn btn-default'>Submit</button>";
textString = textString +"      </form>";
textString = textString +"      <ul class='nav navbar-nav navbar-right'>";
textString = textString +"        <li><a href='#'>Link</a></li>";
textString = textString +"        <li class='dropdown'>";
textString = textString +"          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>";
textString = textString +"            <li><a href='#'>Action</a></li>";
textString = textString +"          <ul class='dropdown-menu'>";

textString = textString +"            <li><a href='#'>Another action</a></li>";
textString = textString +"            <li><a href='#'>Something else here</a></li>";
textString = textString +"            <li role='separator' class='divider'></li>";
textString = textString +"            <li><a href='#'>Separated link</a></li>";
textString = textString +"          </ul>";
textString = textString +"        </li>";
textString = textString +"      </ul>";
textString = textString +"    </div>";
textString = textString +"  </div>";
textString = textString +"</nav>";
//console.log(textString);



textString="<nav id='navbar-example2' class='navbar navbar-light bg-light'> \
  <a class='navbar-brand' href='#'>Navbar</a> \
  <ul class='nav nav-pills'>\
    <li class='nav-item'>\
      <a class='nav-link' href='#current'>Current</a>\
    </li>\
    <li class='nav-item'>\
      <a class='nav-link' href='#mdo'>Yesterday</a>\
    </li>\
    <li class='nav-item dropdown'>\
      <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown</a>\
      <div class='dropdown-menu'> \
        <a class='dropdown-item' href='#one'>one</a> \
        <a class='dropdown-item' href='#two'>two</a> \
        <div role='separator' class='dropdown-divider'></div> \
        <a class='dropdown-item' href='#three'>three</a> \
      </div > \
    </li> \
  </ul> \
</nav>\
";


$("#menudiv").html(textString);
}
