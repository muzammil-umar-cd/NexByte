function toggleLoader(e) {
    $(".errorDIV, .successDIV, #errorDIV-name, #errorDIV-email, #errorDIV-phone, #errorDIV-query_type, #errorDIV-comment, #errorDIV-resume").html(""), "show" == e ? ($("#submit").css("display", "none"), $("#loaderDIV").css("display", "block")) : ($("#submit").css("display", "block"), $("#loaderDIV").css("display", "none"))
}

// function initFormJS() {
//     $("textarea").on("keydown", function(e) {
//         if (32 === e.which && 0 === e.target.selectionStart) return !1
//     }), $("#JS_HTTP_REFERER").val(getCookie("formhttpreffrer")), $(document).on("keyup", "#note , #subject , #fname , #lname", function(e) {
//         $(this).val($(this).val().replace(/[^a-z0-9_ ]/gi, ""))
//     }), $(document).on("change", "#country", function() {
//         let e = $(this).val(),
//             r = $("#country option:selected").text();
//         "select your country" != r ? $("#country_name").val(r) : $("#country_name").val(""), "" != e ? $("#phone").val("+" + e + " ") : $("#phone").val("")
//     }), $(document).ready(function() {
//         $("#formRegister").length && $("#formRegister").submit(function(e) {
//             e.preventDefault();
//             var r = $("#name").val(),
//                 t = $("#organization").val(),
//                 a = $("#email").val(),
//                 o = $("#phone").val(),
//                 n = $("#country").val(),
//                 l = $("#lastname").val(),
//                 s = $("#comment").val(),
//                 i = $("#country_name").val(),
//                 d = window.location.href,
//                 c = d.substring(d.lastIndexOf("/") + 1);
//             if (c.indexOf("?") > -1 && (c = (c = c.substring(0, c.indexOf("?") + 1)).replace("?", "")), "" == c || "/" == c || "index.php" == c) var u = "home";
//             else var u = $("#JS_HTTP_REFERER").val();
//             var h = $("#PHP_HTTP_REFERER").val(),
//                 m = $("#JS_HTTP_REFERER_2").val();
//             if (toggleLoader("show"), 0 == r.length) return toggleLoader("hide"), $("#errorDIV-name").html("Please enter the name!"), $("#name").focus().select(), locoScroll.update(), !1;
//             if (r.length < 3 || r.length > 50) return toggleLoader("hide"), $("#errorDIV-name").html("Name characters length is 3 - 50 characters!"), $("#name").focus().select(), locoScroll.update(), !1;
//             if (0 == l.length) return toggleLoader("hide"), $("#errorDIV-lastname").html("Please enter the last name!"), $("#name").focus().select(), locoScroll.update(), !1;
//             if (l.length < 3 || l.length > 50) return toggleLoader("hide"), $("#errorDIV-lastname").html("last name characters length is 3 - 50 characters!"), $("#name").focus().select(), locoScroll.update(), !1;
//             if (0 == a.length) return toggleLoader("hide"), $("#errorDIV-email").html("Please enter the email address!"), $("#email").focus().select(), locoScroll.update(), !1;
//             if (a.length > 50) return toggleLoader("hide"), $("#errorDIV-email").html("Email max lenght is 50 characters!"), $("#email").focus().select(), locoScroll.update(), !1;
//             if (!1 == /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)) return toggleLoader("hide"), $("#errorDIV-email").html("Please enter the valid email address!"), $("#email").focus().select(), locoScroll.update(), !1;
//             if ("" == $("#country").val()) return toggleLoader("hide"), $("#errorDIV-country").html("Please choose the country!"), $("#query_type").focus().select(), locoScroll.update(), !1;
//             if (0 == o.length) return toggleLoader("hide"), $("#errorDIV-phone").html("Please enter the mobile!"), $("#phone").focus().select(), locoScroll.update(), !1;
//             if (o.length < 5 || o.length > 20) return toggleLoader("hide"), $("#errorDIV-phone").html("Please enter valid mobile!"), $("#phone").focus().select(), locoScroll.update(), !1;
//             if (0 == s.length) return toggleLoader("hide"), $("#errorDIV-comment").html("Please enter the message!"), $("#comment").focus().select(), locoScroll.update(), !1;
//             if (s.length < 3 || s.length > 500) return toggleLoader("hide"), $("#errorDIV-comment").html("message characters length is 3 - 500 characters!"), $("#comment").focus().select(), locoScroll.update(), !1;
//             locoScroll.update();
//             var g = new FormData;
//             g.append("name", r), g.append("lastname", l), g.append("organization", t), g.append("email", a), g.append("phone", o), g.append("country", n), g.append("comment", s), g.append("country_name", i), g.append("ref", u), g.append("phpref", h), g.append("JS_HTTP_REFERER_2", m), grecaptcha.ready(function() {
//                 grecaptcha.execute("6LflWScjAAAAAMygTwOwwDYWlEubIN1vrnDChZ4J", {
//                     action: "ajaxFormSubmit"
//                 }).then(function(e) {
//                     g.append("g-recaptcha-response", e), $.ajax({
//                         url: "add-form-data",
//                         dataType: "text",
//                         cache: !1,
//                         contentType: !1,
//                         processData: !1,
//                         data: g,
//                         type: "post",
//                         success: function(e) {
//                             toggleLoader("hide"), "200" == (response = JSON.parse(e)).code ? ($("#callConversion").trigger("click"), $("#formRegister")[0].reset(), $("#successDIV").html(response.message), ($('.select2')[0].selectize).clear()) : $("#errorDIV").html(response.message), locoScroll.update()
//                         },
//                         error: function(e, r, t) {
//                             toggleLoader("hide"), res = e.responseText;
//                             try {
//                                 response = JSON.parse(res), "420" == response.code ? $("#errorDIV").html("Something went wrong. Please try again later!") : ("100" == response.code || response.code, $("#errorDIV").html(response.message)), locoScroll.update()
//                             } catch (a) {
//                                 $("#errorDIV").html("Something went wrong. Please refresh page and try again!")
//                             }
//                             return !1
//                         }
//                     })
//                 })
//             });
//             return e.stopPropagation(), e.preventDefault(), !1
//         })
//     })
// }

function initFormJS2() {
    $("textarea", "input").on("keydown", function(e) {
        if (32 === e.which && 0 === e.target.selectionStart) return !1
    });
    var e = document.querySelector(".input-file"),
        r = document.querySelector(".input-file-trigger"),
        t = document.querySelector(".file-return");
    r.addEventListener("keydown", function(r) {
        (13 == r.keyCode || 32 == r.keyCode) && e.focus()
    }), r.addEventListener("click", function(r) {
        return e.focus(), !1
    }), e.addEventListener("change", function(e) {
        t.innerHTML = this.value, toggleLoader("hide")
    });
    var r = $("#submit");
    $("#JqAjaxForm").submit(function(e) {
        var a = $("#JqAjaxForm")[0],
            o = new FormData(a);
        return (e.preventDefault(), r.prop("disabled", !0), $designation = $.trim($("#designation").val()), $fname = $.trim($("#fname").val()), $lname = $.trim($("#lname").val()), $city = $.trim($("#city").val()), $email = $.trim($("#email").val()), $subject = $.trim($("#subject").val()), $note = $.trim($("#note").val()), $resume = $.trim($("#file_upload").val()), 0 == $designation.length) ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-designation").html("Please select designation!"), $("#designation").focus().select(), locoScroll.update(), !1) : 0 == $fname.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-firstname").html("Please enter first name!"), $("#fname").focus().select(), locoScroll.update(), !1) : 0 == $lname.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-lastname").html("Please enter last name!"), $("#lname").focus().select(), locoScroll.update(), !1) : 0 == $city.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-city").html("Please select city!"), $("#city").focus().select(), locoScroll.update(), !1) : 0 == $email.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-email").html("Please enter email address!"), $("#email").focus().select(), locoScroll.update(), !1) : 0 == $subject.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-subject").html("Please enter subject!"), $("#subject").focus().select(), locoScroll.update(), !1) : 0 == $note.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-note").html("Please enter Cover Letter!"), $("#note").focus().select(), locoScroll.update(), !1) : $note.length > 500 ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-note").html("Please enter less than 500 characters covering note!"), $("#note").focus().select(), locoScroll.update(), !1) : 0 == $resume.length ? (r.prop("disabled", !1), toggleLoader("hide"), $("#errorDIV-resume").html("Please upload your CV!"), $("#resume").focus().select(), locoScroll.update(), !1) : (e.preventDefault(), toggleLoader("show"), grecaptcha.ready(function() {
            grecaptcha.execute("6LflWScjAAAAAMygTwOwwDYWlEubIN1vrnDChZ4J", {
                action: "ajaxFormSubmit"
            }).then(function(e) {
                o.append("g-recaptcha-response", e), $.ajax({
                    type: "POST",
                    url: "/save_application",
                    data: o,
                    processData: !1,
                    contentType: !1,
                    success: function(e) {
                        if (toggleLoader("hide"), "1" == e) return $("#successDIV").html("Thank you for submitting your request. We will contact you shortly"), $("#JqAjaxForm").trigger("reset"), ($('.select2')[0].selectize).clear(), t.innerHTML = "", r.prop("disabled", !1), !1;
                        if ("2" == e) return toggleLoader("hide"), $("#errorDIV").html("Sorry, your CV is too large to upload.!"), r.prop("disabled", !1), !1;
                        if ("3" == e) return toggleLoader("hide"), $("#errorDIV").html("Sorry, only JPG/JPEG, PNG, PDF & MS-WORD files are allowed!"), r.prop("disabled", !1), !1;
                        if ("4" == e) return toggleLoader("hide"), $("#errorDIV").html("Sorry, your CV was not uploaded. Please try again!"), r.prop("disabled", !1), !1;
                        if ("5" == e) return toggleLoader("hide"), $("#errorDIV").html("Sorry, there was an error uploading your CV!"), r.prop("disabled", !1), !1;
                        else if ("Sorry, file already exists." != e) return toggleLoader("hide"), $("#errorDIV").html("There was an error. Please try again!"), r.prop("disabled", !1), !1
                    }
                })
            })
        }), !1)
    })
}