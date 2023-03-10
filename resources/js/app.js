import './bootstrap';

$('.todo-container').on('click', '.single-todo',function () {
    $(this).hasClass('completed') ? $(this).removeClass('completed') : $(this).addClass('completed');
});

$('.add-btn').on('click', function () {
    const box = $('.input-box');
    if (!box.val()) {
        return;
    }
    const newTodo = `<p class="single-todo">${box.val()}</p>`;
    $('.todos').append(newTodo);
    box.val('')
});