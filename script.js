//открыть модальное окно контактов
var btnOpenContact = document.querySelector("#open_contact");
btnOpenContact.onclick = function(){
	var contactsModal = document.querySelector("#contacts-modal");
	contactsModal.style.display = "block";
 }
 //закрыть модальное окно контактов
var contactsModalCloseBtn = document.querySelector("#contacts-modal .close");
	contactsModalCloseBtn.onclick = function()
	{
		var contactsModal = document.querySelector("#contacts-modal");
		contactsModal.style.display = "none";
	}

	var btnOpenVhod = document.querySelector("#open_vhod");
btnOpenVhod.onclick = function(){
	var vhodModal = document.querySelector("#vhod-modal");
	vhodModal.style.display = "block";
 }
 //закрыть модальное окно входа
var vhodModalCloseBtn = document.querySelector("#vhod-modal .close");
	vhodModalCloseBtn.onclick = function()
	{
		var vhodModal = document.querySelector("#vhod-modal");
		vhodModal.style.display = "none";
	}