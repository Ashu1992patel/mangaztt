// JavaScript Document

// ---------for mother tongue-----------------

function addSrcToDestListM() {
mtongue = window.document.forms[1].mtongue;
mtongue1 = window.document.forms[1].mtongue1; 
var len = mtongue.length;
for(var i = 0; i < mtongue1.length; i++) {
if ((mtongue1.options[i] != null) && (mtongue1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (mtongue.options[count] != null) {
if (mtongue1.options[i].text == mtongue.options[count].text) {
mtongue.options[i].selected;
found = true;
break;
      }
   }
}
if (found != true) {
mtongue.options[len] = new Option(mtongue1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListM() {
var mtongue  = window.document.forms[1].mtongue;
var len = mtongue.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((mtongue.options[i] != null) && (mtongue.options[i].selected == true)) {
mtongue.options[i] = null;
      }
   }
}

function selectFromDestListM() {
var mtongue  = window.document.forms[1].mtongue;
for (i=0; i<mtongue.length; i++) { 
mtongue.options[i].selected = true; 
}
}

//--------------------------- Religion ------------------------------------

function addSrcToDestListR() {
lstreligion = window.document.forms[1].lstreligion;
lstreligion1 = window.document.forms[1].lstreligion1; 
var len = lstreligion.length;
for(var i = 0; i < lstreligion1.length; i++) {
if ((lstreligion1.options[i] != null) && (lstreligion1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (lstreligion.options[count] != null) {
if (lstreligion1.options[i].text == lstreligion.options[count].text) {
//lstreligion.options[i].selected;
found = true;
break;
      }
   }
}
if (found != true) {
lstreligion.options[len] = new Option(lstreligion1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListR() {
var lstreligion  = window.document.forms[1].lstreligion;
var len = lstreligion.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((lstreligion.options[i] != null) && (lstreligion.options[i].selected == true)) {
lstreligion.options[i] = null;
      }
   }
}

function selectFromDestListR() {
var lstreligion  = window.document.forms[1].lstreligion;
for (i=0; i<lstreligion.length; i++) { 
lstreligion.options[i].selected = true; 
}
}

//--------------------------- Caste ------------------------------------

function addSrcToDestListC() {
caste = window.document.forms[1].caste;
caste1 = window.document.forms[1].caste1; 
var len = caste.length;
for(var i = 0; i < caste1.length; i++) {
if ((caste1.options[i] != null) && (caste1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (caste.options[count] != null) {
if (caste1.options[i].text == caste.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
caste.options[len] = new Option(caste1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListC() {
var caste  = window.document.forms[1].caste;
var len = caste.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((caste.options[i] != null) && (caste.options[i].selected == true)) {
caste.options[i] = null;
      }
   }
}

function selectFromDestListC() {
var caste  = window.document.forms[1].caste;
for (i=0; i<caste.length; i++) { 
caste.options[i].selected = true; 
}
}


//--------------------------- State ------------------------------------

function addSrcToDestListS() {
lststate = window.document.forms[1].lststate;
lststate1 = window.document.forms[1].lststate1; 
var len = lststate.length;
for(var i = 0; i < lststate1.length; i++) {
if ((lststate1.options[i] != null) && (lststate1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (lststate.options[count] != null) {
if (lststate1.options[i].text == lststate.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
lststate.options[len] = new Option(lststate1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListS() {
var lststate  = window.document.forms[1].lststate;
var len = lststate.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((lststate.options[i] != null) && (lststate.options[i].selected == true)) {
lststate.options[i] = null;
      }
   }
}

function selectFromDestListS() {
var lststate  = window.document.forms[1].lststate;
for (i=0; i<lststate.length; i++) { 
lststate.options[i].selected = true; 
}
}



//--------------------------- Education ------------------------------------

function addSrcToDestListE() {
cmbedu = window.document.forms[1].cmbedu;
cmbedu1 = window.document.forms[1].cmbedu1; 
var len = cmbedu.length;
for(var i = 0; i < cmbedu1.length; i++) {
if ((cmbedu1.options[i] != null) && (cmbedu1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (cmbedu.options[count] != null) {
if (cmbedu1.options[i].text == cmbedu.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
cmbedu.options[len] = new Option(cmbedu1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListE() {
var cmbedu  = window.document.forms[1].cmbedu;
var len = cmbedu.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((cmbedu.options[i] != null) && (cmbedu.options[i].selected == true)) {
cmbedu.options[i] = null;
      }
   }
}

function selectFromDestListE() {
var cmbedu  = window.document.forms[1].cmbedu;
for (i=0; i<cmbedu.length; i++) { 
cmbedu.options[i].selected = true; 
}
}
//--------------------------- Occupation ------------------------------------
function addSrcToDestListO() {
cmboccu = window.document.forms[1].cmboccu;
cmboccu1 = window.document.forms[1].cmboccu1; 
var len = cmboccu.length;
for(var i = 0; i < cmboccu1.length; i++) {
if ((cmboccu1.options[i] != null) && (cmboccu1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (cmboccu.options[count] != null) {
if (cmboccu1.options[i].text == cmboccu.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
cmboccu.options[len] = new Option(cmboccu1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListO() {
var cmboccu  = window.document.forms[1].cmboccu;
var len = cmboccu.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((cmboccu.options[i] != null) && (cmboccu.options[i].selected == true)) {
cmboccu.options[i] = null;
      }
   }
}

function selectFromDestListO() {
var cmboccu  = window.document.forms[1].cmboccu;
for (i=0; i<cmboccu.length; i++) { 
cmboccu.options[i].selected = true; 
}
}

//--------------------------- Star ------------------------------------
function addSrcToDestListSt() {
star = window.document.forms[1].star;
star1 = window.document.forms[1].star1; 
var len = star.length;
for(var i = 0; i < star1.length; i++) {
if ((star1.options[i] != null) && (star1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (star.options[count] != null) {
if (star1.options[i].text == star.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
star.options[len] = new Option(star1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListSt() {
var star  = window.document.forms[1].star;
var len = star.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((star.options[i] != null) && (star.options[i].selected == true)) {
star.options[i] = null;
      }
   }
}

function selectFromDestListSt() {
var star  = window.document.forms[1].star;
for (i=0; i<star.length; i++) { 
star.options[i].selected = true; 
}
}

//--------------------------- Country Living------------------------------------
function addSrcToDestListCL() {
countryliving = window.document.forms[1].countryliving;
countryliving1 = window.document.forms[1].countryliving1; 
var len = countryliving.length;
for(var i = 0; i < countryliving1.length; i++) {
if ((countryliving1.options[i] != null) && (countryliving1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (countryliving.options[count] != null) {
if (countryliving1.options[i].text == countryliving.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
countryliving.options[len] = new Option(countryliving1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListCL() {
var countryliving  = window.document.forms[1].countryliving;
var len = countryliving.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((countryliving.options[i] != null) && (countryliving.options[i].selected == true)) {
countryliving.options[i] = null;
      }
   }
}

function selectFromDestListCL() {
var countryliving  = window.document.forms[1].countryliving;
for (i=0; i<countryliving.length; i++) { 
countryliving.options[i].selected = true; 
}
}

//--------------------------- Citizenship ------------------------------------
function addSrcToDestListCT() {
citizenship = window.document.forms[1].citizenship;
citizenship1 = window.document.forms[1].citizenship1; 
var len = citizenship.length;
for(var i = 0; i < citizenship1.length; i++) {
if ((citizenship1.options[i] != null) && (citizenship1.options[i].selected)) {
//Check if this value already exist in the destList or not
//if not then add it otherwise do not add it.
var found = false;
for(var count = 0; count < len; count++) {
if (citizenship.options[count] != null) {
if (citizenship1.options[i].text == citizenship.options[count].text) {
found = true;
break;
      }
   }
}
if (found != true) {
citizenship.options[len] = new Option(citizenship1.options[i].text); 
len++;
         }
      }
   }
}
// Deletes from the destination list.
function deleteFromDestListCT() {
var citizenship  = window.document.forms[1].citizenship;
var len = citizenship.options.length;
for(var i = (len-1); i >= 0; i--) {
if ((citizenship.options[i] != null) && (citizenship.options[i].selected == true)) {
citizenship.options[i] = null;
      }
   }
}

function selectFromDestListCT() {
var citizenship  = window.document.forms[1].citizenship;
for (i=0; i<citizenship.length; i++) { 
citizenship.options[i].selected = true; 
}
}