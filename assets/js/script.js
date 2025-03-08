// Wait until the document is ready
$(document).ready(function () {
    console.log("JavaScript Loaded!");

    // ✅ Form Validation for Login & Signup
    $("form").submit(function (event) {
        let isValid = true;
        $(this).find("input").each(function () {
            if ($(this).val().trim() === "") {
                isValid = false;
                $(this).css("border", "2px solid red");
            } else {
                $(this).css("border", "1px solid #ddd");
            }
        });

        if (!isValid) {
            event.preventDefault();
            alert("Please fill in all fields.");
        }
    });

    // ✅ Smooth Hover Effects for Level Cards
    $(".level-card").hover(
        function () {
            $(this).css("box-shadow", "0px 6px 12px rgba(0,0,0,0.2)");
        },
        function () {
            $(this).css("box-shadow", "0px 4px 6px rgba(0,0,0,0.1)");
        }
    );

    // ✅ Highlight the Selected Level
    $(".level-card a").click(function () {
        $(".level-card").removeClass("selected");
        $(this).parent().addClass("selected");
    });
});
