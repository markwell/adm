	<!-- Основной контент сайта -->
  <div class="row">
    <div class="caption">
      <h3>Заявка на платную услугу</h3>
      <? 
      if (isset($data)){
            echo('<br><div class="alert alert-info" role="alert">'.$data.'</div>');
          }
      ?>
      <form role="form" class="form-horizontal"  method="POST" action="/adm/order/sendMessage">
        <div class="form-group">
          <label>Адрес обслуживаемого дома</label>
          <textarea class="form-control" name="homeadresFF" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Квартира</label>
          <input type="text" name="flatFF" class="form-control" placeholder="Номер">
        </div>
        <div class="form-group">
          <label>Ваши контакты</label>
          <input type="text" name="contacsFF" class="form-control" placeholder="Фамилия Имя Отчество"><br />
          <div class="row">
            <div class="col-xs-6 col-md-6">
              <input type="text" name="phoneFF" class="form-control" placeholder="Ваш номер телефона">
            </div>
            <div class="col-xs-6 col-md-6">
              <input type="text" name="mailFF" class="form-control" placeholder="Ваша электронная почта">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Услуга</label>
          <select class="form-control" name="serviceFF">
            <option disabled="">Выберите тип работы</option>
            <optgroup label="1. Услуги по горячему и холодному водоснабжению и центральному отоплению">
              <option>
                1. Услуги по горячему и холодному водоснабжению и центральному отоплению
              </option>
              <option>
                1.1.  Смена внутренних трубопроводов из стальных труб д = 15-25 мм
              </option>
              <option>
                1.2 Смена внутренних трубопроводов на медные и металлопластовые трубы д = 15-25 мм
              </option>
              <option>
                1.3 Смена внутренних трубопроводов на полимерные трубы д = 15-25 мм
              </option>
              <option>
                1.4 Смена канализационных труб, труб д = 50-120 мм
              </option>
              <option>
                1.5 Смена вентилей муфтовых д = до 20 мм
              </option>
              <option>
                1.6 Смена вентилей муфтовых д = до 32 мм
              </option>
              <option>
                1.7 Смена фильтров муфтовых д = до 20 мм
              </option>
              <option>
                1.8 Смена фильтров муфтовых д = до 32 мм
              </option>
              <option>
                1.9 Смена сгонов у трубопроводов д = 25 мм
              </option>
              <option>
                1.10  Смена мойки
              </option>
              <option>
                1.11  Смена мойки со смесителем
              </option>
              <option>
                1.12  Смена раковины
              </option>
              <option>
                1.13  Смена полотенцесушителя
              </option>
              <option>
                1.14  Смена сифона чугунного
              </option>
              <option>
                1.15  Смена сифона пластмассового
              </option>
              <option>
                1.16  Смена выпусков к умывальникам
              </option>
              <option>
                1.17  Смена выпусков ванны
              </option>
              <option>
                1.18  Смена смывной трубы
              </option>
              <option>
                1.19  Смена смывного бачка, кроме импортных
              </option>
              <option>
                1.20  Смена унитаза, кроме импортных
              </option>
              <option>
                1.21  Смена унитаза "Компакт", кроме импортных
              </option>
              <option>
                1.22  Укрепление расшатанного унитаза
              </option>
              <option>
                1.23  Ремонт арматуры смывного бачка  компл.  200
              </option>
              <option>
                1.24  Смена поплавка смывного бачка
              </option>
              <option>
                1.25  Смена резинового манжета унитаза
              </option>
              <option>
                1.26  Смена резиновой манжеты при смывном бачке
              </option>
              <option>
                1.27  Смена подложки под унитаз
              </option>
              <option>
                1.28  Смена ванны стальной
              </option>
              <option>
                1.29  Смена пластмассового тройника под ванну
              </option>
              <option>
                1.30  Смена обвязки под ванну
              </option>
              <option>
                1.31  Прочистка и промывка сифонов под раковиной пластмассовых
              </option>
              <option>
                1.32  Промывка и прочистка сифонов под раковиной чугунных
              </option>
              <option>
                1.33  Прочистка приборов канализации
              </option>
              <option>
                1.34  Зачеканка раструбов канализационных труб д = 100-125
              </option>
              <option>
                1.35  Устранение засоров канализации в квартире
              </option>
              <option>
                1.36  Прочистка трубопровода д = до 25 мм
              </option>
              <option>
                1.37  Прочистка кранов (фильтров) д = до 25 мм
              </option>
              <option>
                1.38  Смена смесителя с душем
              </option>
              <option>
                1.39  Смена смесителя без душа
              </option>
              <option>
                1.40  Ремонт смесителя с душем без снятия с места (смена прокладки)
              </option>
              <option>
                1.41  Добавление секций радиатора одной или двух крайних
              </option>
              <option>
                1.42  Смена радиаторов стальных двухрядных (без кронштейнов)
              </option>
              <option>
                1.43  Смена радиаторов чугунных
              </option>
              <option>
                1.44  Перегруппировка секций радиатора
              </option>
              <option>
                1.45  Отключение стояка центрального отопления
              </option>
              <option>
                1.46  Включение стояка центрального отопления
              </option>
              <option>
                1.47  Отключение и включение стояка холодного (горячего) водоснабжения для выполнения работ по замене или ремонту водоразборных устройств
              </option>
              <option>
                1.49 Опломбирование и приемка квартирных приборов учета холодной и горячей воды в коммерческий учет
              </option>
              <option>
                1.50  Согласование перепланировки и переустройства жилых квартир  квартира
              </option>
              <option>
                1.51  Выход специалиста с составлением Акта
              </option>
            </optgroup>
            <optgroup label="2. Электротехнические работы">
              <option value="53">
                2. Электротехнические работы
              </option>
              <option>
                2.1 Смена отдельных участков проводки внутренней
              </option>
              <option>
                2.2 Смена отдельных участков проводки наружной
              </option>
              <option>
                2.3 Смена выключателя (розетки)
              </option>
              <option>
                2.4 Смена пакетного выключателя
              </option>
              <option>
                2.5 Смена стенного или потолочного патрона на 1 лампу
              </option>
              <option>
                2.6 Смена светильника с люминесцентными лампами
              </option>
              <option>
                2.7 Смена деталей креплений для светильников
              </option>
              <option>
                2.8 Ремонт предохранительных колодок
              </option>
              <option>
                2.9 Смена светильника с лампами накаливания
              </option>
              <option>
                2.10  Смена плавкой вставки (предохранителя)
              </option>
              <option>
                2.11  Смена стартера
              </option>
            </optgroup>
          </select>
        </div>
        <div class="form-group">
          <label>Планируемая дата выполнения работы</label>
          <input type="text" name="dateFF" class="form-control">
        </div>
        <div class="form-group">
          <label>Комментарий</label>
          <textarea class="form-control" name="commentFF" rows="3"></textarea>
        </div>
        <button type="submit" name="submitFF" class="btn btn-default">Отправить</button>
      </form>
    </div>
  </div>
  <br />