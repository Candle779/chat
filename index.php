  <!DOCTYPE html>
 <html>
 <head>
 	<title>Вебчат</title>
 	<link rel="stylesheet" type="text/css" href="main.css">
 </head>
 <body>

 	<!--
	1. Сверстать шапку
		1.1. Сделать логотип
		1.2. Сделать меню

	2. Сверстать левое меню
		2.1. Сделать поиск
		2.2. Сделать список контактов.
	3. Сверстать переписку с пользователем
		3.1. Вывод сообщений
		3.2. Форма для отправки сообщений
	4. Список контактов модальное окно
		4.1. Поле поиска
		4.2. список контактов
	5. Окно авторизации и регистрации



 	-->

 	<div id="shapka">
 		 <div id="logo">
 		 	<img src="/images/1.png">
      <span><b>Веб</b><i>ЧАТ</i></span>
 		 </div>

 		 <div id="menu">
 		 	<a href=" #" id="open_contact">Контакты</a>
 		 	<a href="#">Настройки</a>
 		 	<a href="#" id="open_vhod">Войти</a>
 		 </div>
 	</div>

 	<div id="content">
 		<div id="users">
 			<div id="poisk">
 				<input type="text" name="text">

 				<button>
 					 <img src=images/search2.png>
 				</button>
 			</div>

 			<div id="spisok">
 				<ul>

 					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>
 					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>

 					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>

 					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>

 					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>

 					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>

  					<li>
 						<div class="avatar">
 							<img src="images/user.png">
 						</div>
 						<h2>Peter</h2>
 						<p>Привет!</p>
 						<div class="time">09:10</div>

 					</li>

 				</ul>
 			</div>
 		</div>

 		<div id = "soobsheniya">
 		 	<div id="spisok-soobsheniy">

              <ul>
                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                 <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>
                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>
                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                 <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                 <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>
                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  <p >Привет</p>
                  <div class="time">9:10</div>
                </li>
              </ul>

 		 	</div>

      	        <div id="form">
	<textarea> </textarea>
	<button> <img src="images/send.png">
	</button>
	</div>

        </div>
 	</div>

	<div class ="modal"  id="contacts-modal">
    <div class="close">X</div>
      <div class="content">
          <ul>
                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
               

                </li>
                <li>
                    <div class="avatar">
                       <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>

                </li>


                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
               

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                 

                </li>
                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                 

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>

                </li>

                <li>
                    <div class="avatar">
                      <img src="images/user.png">
                    </div>

                  <h2>Peter</h2>
                  

                </li>


          </ul>
  
      </div>
	             
	</div>

  <div class ="modal"  id="vhod-modal">
    <div class="close">X</div>
      <div class="content">
        <h2>E-mail:</h2>
        <div id="mail">
          <input type="text" name="text1">
        </div>

        <h2>Пароль:</h2>
        <div id="password">
          <input type="text" name="text2">
        </div>
           <button><b>Войти</b></button>
      </div>
               
  </div>

	<script src="script.js"></script>
	 </body>
 </html>