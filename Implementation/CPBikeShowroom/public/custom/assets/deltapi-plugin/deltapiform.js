function initEditor() {
	oBlock = document.getElementById('form_customHTML');
	oCss = document.getElementById('form_customCSS');
	oCss.innerText = document.getElementById('formStyle').innerText;
	oCss.style.display = 'none';
	oBlock.focus();
	document.getElementById('showformcode').disabled=false;
	document.getElementById('showformhtml').disabled=true;
	document.getElementById('clearformhtml').disabled=false;
	document.getElementById('clearformcss').disabled=true;
	document.getElementById('startformedit').disabled=true;
	document.getElementById('copyform').disabled=false;
	document.getElementById('appendform').disabled=false;
}
function clearelem(elemid){
	document.getElementById(elemid).innerHTML="";
	oCss.innerText = document.getElementById('formStyle').innerText;
}
function showformcodeelem(){
	setDocMode(true,oBlock,"html");
	setDocMode(true,oCss,"css");
	oCss.style.display = 'block';
	document.getElementById('showformcode').disabled=true;
	document.getElementById('showformhtml').disabled=false;
	document.getElementById('clearformhtml').disabled=true;
	document.getElementById('clearformcss').disabled=false;
	document.getElementById('formCSS').style.display = 'block';
	document.getElementById('formHTML').style.display = 'block';
}
function showformhtmlelem(){
	setDocMode(false,oBlock,"html");
	setDocMode(false,oCss,"css");
	document.getElementById('formStyle').innerText = oCss.innerText;
	oCss.style.display = 'none';
	document.getElementById('showformcode').disabled=false;
	document.getElementById('showformhtml').disabled=true;
	document.getElementById('clearformhtml').disabled=false;
	document.getElementById('clearformcss').disabled=true;
	document.getElementById('formCSS').style.display = 'none';
	document.getElementById('formHTML').style.display = 'none';
}
function setDocMode(bToSource,oDoc,lang) {
  var oContent;
  if (bToSource) {
    oContent = document.createTextNode(oDoc.innerHTML);
    oDoc.innerHTML = "";
    var oPre = document.createElement("pre");
	var oCode = document.createElement("code");
    oDoc.contentEditable = false;
    oCode.id = "code"+oDoc.id;
	oCode.className = lang;
	oPre.className = lang;
    oCode.contentEditable = true;
    oCode.appendChild(oContent);
    oDoc.appendChild(oPre);
	oPre.appendChild(oCode);
	oCode.style.width = "inherit";
	hljs.highlightBlock(document.getElementById("code"+oDoc.id));
  } else {
    if (document.all) {
      oDoc.innerHTML = oDoc.innerText;
    } else {
      oContent = document.createRange();
      oContent.selectNodeContents(oDoc.firstChild);
      oDoc.innerHTML = oContent.toString();
    }
    oDoc.contentEditable = true;
  }
  oDoc.focus();
}
function copyForm() {
		oBlock.innerHTML=document.getElementById('formbuilderframe').contentDocument.getElementById('render').value;
}
function appendForm() {
		formHTML=document.getElementById('formbuilderframe').contentDocument.getElementById('render').value;
		oBlock.insertAdjacentHTML('beforeend', formHTML);
}