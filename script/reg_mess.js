const regForm = document.getElementById('regf');
const examForm = document.getElementById('exam-info');

regForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const surnameInput = document.getElementById('surname');
  const nameInput = document.getElementById('name');
  const timeInput = document.querySelector('input[name="time"]:checked');
  const controlInput = document.querySelector('input[name="control"]:checked');
  const lessonInput = document.getElementById('select-lesson');
  const commentInput = document.getElementById('comment');

  const surname = surnameInput.value.trim();
  const name = nameInput.value.trim();
  const time = timeInput ? timeInput.value : null;
  const control = controlInput ? controlInput.value : null;
  const lesson = lessonInput.value;
  const comment = commentInput.value.trim();


  if (!surname || !name || !time || !control) {
    alert(`Пожалуйста, заполните поле ${!surname ? 'Фамилия ' : ''}${!name ? (!surname ? 'Имя ' : ', Имя') : ''}${!time ? (!surname && !name ? 'Время ' : ', Время') : ''}${!control ? (!surname && !name && !time ? 'Форма контроля' : ', Форма контроля') : ''}.`);
    return;
  }

  const greeting = `${surname} ${name}!`;
  const examSubject = document.querySelector(`#select-lesson option[value="${lesson}"]`).textContent;
  const examTime = time;
  const examFormType = control;
  const commentThankYou = comment ? `Спасибо за комментарий: ${comment}` : '';

  document.getElementById('greeting').textContent = greeting;
  document.getElementById('exam-subject').textContent = examSubject;
  document.getElementById('exam-time').textContent = examTime;
  document.getElementById('exam-form').textContent = examFormType;
  document.getElementById('comment-thank-you').textContent = commentThankYou;
  document.getElementById('greeting-input').value = greeting;
  document.getElementById('exam-subject-input').value = examSubject;
  document.getElementById('exam-time-input').value = examTime;
  document.getElementById('exam-form-input').value = examFormType;
  document.getElementById('comment-thank-you-input').value = comment;

  

  regForm.style.display = 'none';
  examForm.style.display = 'block';
  
});