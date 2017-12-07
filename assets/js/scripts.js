function verify(){
    var feedback = document.getElementById("feedback");
    for (var i = 0; i < 3; i++){
        var radioChecked = false;
        var question_number = i + 1;
        var question = document.getElementsByName("question" + question_number);
        console.log("question" + i);
        for (var j = 0; j < question.length; j++){
            if (question[j].checked) {
                radioChecked = true;
                break;
            }
        }
        if (!radioChecked){
            feedback.innerHTML = "Please answer all the questions."
            return false;
        }
    }
    return true;
}