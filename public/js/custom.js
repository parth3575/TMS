$(document).ready(function() {
    $("#mcq_form").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#ajax-response').html(data);
            }
        });
    });

    $("#but_1").click(function() {
        $(".rb").show();
        $(".rb").attr("disabled", true);
        $("#finish").toggle();
        $("#refresh").toggle();
        $("#but_1").attr("disabled", true);
    });

    $("#start_btn").click(function() {
        $("#mcq_form").toggle();
        $("#start_btn").attr("disabled", true);
    });

    $("#refresh").click(function() {
        location.reload();
    });


});


function fetchSelected()
{

try
{

    var values = [];
    var answers = [];
    var marks = 0;
    var a = document.getElementsByTagName("input");
    for (i = 0; i <= a.length; i++)
    {
       if (a[i].type == "radio")
       {
            if(a[i].checked )
            {
//                document.getElementById("UserAnswers").innerHTML += " The Answer you selected is: " + a[i].value+"<br/>";
                var result  = a[i].value;
                values.push(result);
            }

       }
       if(a[i].type == "hidden")
       {
            var ans  = a[i].value;
            answers.push(ans);
       }

    }

}
finally{
    // alert(values);
    // alert(answers);

    for (var i = 0, len = values.length; i < len; i++){
        if (values[i] != answers[i]){
            marks = marks;
        }
        else{
            marks += 1;
        }
    }
    // alert(marks);
    document.getElementById("marks").innerHTML = " Your Scored: " + marks;
    document.getElementById("marks_submit").value = marks;
}

}




function verifyanswers() {
    var x = [];
    var y = [];

    document.getElementById("results").value = "";
    document.getElementById("results1").value = "";
    // document.getElementById("results3").innerHTML = "";
    document.getElementById("UserAnswers").innerHTML = "";

    var a = document.getElementsByTagName("input");
    for (i = 0; i <= a.length; i++)
    {
       if (a[i].type == "radio")
       {
          if(a[i].checked )
          {
                document.getElementById("UserAnswers").innerHTML += "Q" + a[i].name + " The Answer you selected is: " + a[i].value+"<br/>";
                x= document.getElementById("results").value += a[i].value +"<br/>";
          }
       }
       if(a[i].type == "hidden")
       {
          y= document.getElementById("results1").value += a[i].value +"<br/>";
       }
    }

//    var result = compareArrays(x, y);
//    document.getElementById("results3").innerHTML = result;
}


function compareArrays() {
    //     var b = 0;
    //     document.getElementById("results4").innerHTML = "";
    //     for(let i=0; i<x.length; i++) {
    //     if(x[i] != x[i]) {
    //         b = b;
    //     }
    //     else {
    //         b += 1;
    //     }
    // }
    // document.getElementById("results4").innerHTML = b;

    // document.getElementById("results").value = "";
    // document.getElementById("results").value = "";
    // document.getElementById("results2").innerHTML = "";
    var x = document.getElementsByTagName("input");
    var b=0;
    for (i = 0; i <= x.length; i++)
    {
       var r = document.getElementById("results").value;
       var r1 = document.getElementById("results1").value;
        if(r===r1)
        {
            b += 1;
        }
        else
        {
            b=b;
        }
    }
    document.getElementById("results2").innerHTML = b;

}


var sec = 1800; //1800 sec = 30 min
var time;

function startTimer() {
    time = setInterval(function() {
        countTimer()
    }, 1000);
}

function countTimer() {
    document.getElementById("timer").innerHTML = sec + " - sec left";
    sec--;
    if (sec == -1) {
        clearInterval(time);
        document.getElementById("but_1").click();
        endTimer();

    }
}

function endTimer() {
    document.getElementById("iTimeShow").innerHTML = "Time ran out";

}

function stopTimer() {
    clearTimeout(time);
}

document.addEventListener('contextmenu', event=> event.preventDefault());
