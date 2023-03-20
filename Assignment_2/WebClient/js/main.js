var clicks = 0;

function onClick() {
  clicks += 1;
  document.getElementById("clicks").innerHTML = clicks;
};


$(".searchfeildstyle").each(function() {
    if($(this).val() === "") {
        $(this).css({"border-style": "solid", "border-color": "red", "background-color": "#fba8a8"});
    }
});