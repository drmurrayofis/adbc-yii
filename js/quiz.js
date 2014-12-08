$(function(){
    $(".sequencer-body").on('click', '.quiz-answers > li', function(){
        
        var ui       = $(this).closest(".quiz-ui");
        var answers  = ui.find(".quiz-answers");
        var question = ui.find(".quiz-question");

        answers.children().removeClass("right wrong");

        var idx = $(".quiz-answers > li").index($(this));
        var correct_idx = parseInt(question.attr('data-correct'));

        if (idx == correct_idx)
        {
            $(this).addClass("right");
        }
        else
        {
            $(this).addClass("wrong");
        }
    });
});
