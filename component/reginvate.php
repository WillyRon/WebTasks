<form id = "regf">
            <div class="regbl">
                <div>
                    <label for="surname">
                        <input type="text" id="surname" name="surname">
                        <span>Фамилия</span>
                    </label>
                </div>
                <div>
                    <label for="name">
                        <input type="text" id="name" name="name">
                        <span>Имя</span>
                    </label>
                </div>
            </div>
            <div class="regbl">
                <div>
                <label>Выберите время</label>
                <div>
                    <input id="time-1" type="radio" id="time" name="time" value = "9:00 - 10:30">
                    <label for="time-1">9:00 - 10:30</label>
                </div>
                <div>
                    <input id="time-2" type="radio" id="time" name="time" value = "10:40 - 12:10">
                    <label for="time-2">10:40 - 12:10</label>
                </div>
                <div>
                    <input id="time-3" type="radio" id="time" name="time" value = "12:50 - 14:20">
                    <label for="time-3">12:50 - 14:20</label>
                </div>
                <div>
                    <input id="time-4" type="radio" id="time" name="time" value = "14:30 - 16:00">
                    <label for="time-4">14:30 - 16:00</label>
                </div>
                <div>
                    <input id="time-5" type="radio" id="time" name="time" value = "16:10 - 17:40">
                    <label for="time-5">16:10 - 17:40</label>
                </div>
                </div>
                <div>
                <label>Выберите форму контроля</label>
                <div>
                    <input id="form-control-6" type="radio" id="control" name="control" value = "текст">
                    <label for="form-control-6">текст</label>
                </div>
                <div>
                    <input id="form-control-6" type="radio" id="control"  name="control" value = "собеседование">
                    <label for="form-control-6">собеседование</label>
                </div>
                <div>
                    <input id="form-control-6" type="radio" id="control"  name="control" value = "доклад">
                    <label for="form-control-6">доклад</label>
                </div>
                <div>
                    <input id="form-control-6" type="radio" id="control"  name="control" value = "контрольная работа">
                    <label for="form-control-6">контрольная работа</label>
                </div>
            </div>
            </div>
            <div class="regbl">
                <label for="select-lesson">Выберите предмет</label>
                <select name="select-lesson" id="select-lesson">
                    <option value="1">Программирование в UNIX</option>
                    <option value="2">Программные технологии ИНТЕРНЕТ</option>
                    <option value="3">Разработка приложений на Java</option>
                    <option value="4">Функциональное программирование</option>
                </select>
              
                <button type="submit">Проверить данные</button>
            </div>
            <label for="comment">Дополнительная информация</label>
            <textarea name="comment" id="comment" cols="20" rows="10" style="width: 100%;">
                </textarea>
        </form>

 <form id="exam-info"  method="post" action="component/add_reg_atest.php" style="display: none; border: 1px solid #ccc; padding: 20px; max-width: 500px;">
<div style="margin-bottom: 10px;">
    <label for="greeting" style="font-weight: bold;">Уважаемый </label>
    <span id="greeting"></span>
    <input type="hidden" name="greeting" id="greeting-input">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="exam-subject" style="font-weight: bold;">Ждем вас на экзамен по </label>
    <span id="exam-subject"></span>
    <input type="hidden" name="exam-subject" id="exam-subject-input">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="exam-time" style="font-weight: bold;">Экзамен пройдет в </label>
    <span id="exam-time"></span>
    <input type="hidden" name="exam-time" id="exam-time-input">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="exam-form" style="font-weight: bold;">Экзамен пройдет в форме </label>
    <span id="exam-form"></span>
    <input type="hidden" name="exam-form" id="exam-form-input">
  </div>
  <div id="comment-section" style="margin-bottom: 10px;">
    <label for="comment-thank-you" style="font-weight: bold;"> </label>
    <span id="comment-thank-you"></span>
    <input type="hidden" name="comment-thank-you" id="comment-thank-you-input">
  </div>
  <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Подтвердить запись</button>
</form>
