var event, ok;
var trueAnswer=0;
do {//Выводим первый вопрос
    ok = false;
    var j=Math.round(Math.random()*(questions.length-1));
    event = +prompt(questions[j].question + questions[j].answer[0] + questions[j].answer[1] + questions[j].answer[2] + questions[j].answer[3] + '-1 - Выход из игры');
    if (event == -1) {
        break;
    }
    else {
        ok = isAnswer(questions[j].q, questions[j].trueAnswer, event); 
    }
    if(questions.length>0){
            questions.splice(j,1);
    }
} while (!ok);
alert('Спасибо за игру');
//------------------------------------------
function isAnswer(q, a, event) {
    if (isNaN(event) || !isFinite(event)) {
        alert('Вы ввели недопустимый символ');
        return false;
    }
    else if (event < 1 || event > q) {
        alert('Ваше число выходит из допустимого диапозона');
        return false;
    }
    else if(a==event){
//        alert(a+" "+q+" "+event);
        alert ("Верно! Ответов дано: " + ++trueAnswer);
        if(trueAnswer>=3){
            return true;
        }
        else{
            return false;
        }
    } 
    else if(a!=event){
        alert("Ответ не верный, вы проиграли!");
        return true;
    }
}