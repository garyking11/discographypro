    function updateStudio() {
      var url = "add/process/studioProcess.php";
	  var username = document.getElementById("usernameS").value;
	  //var sid = document.getElementById("sid").value;
  	  var approved=document.getElementById("sapprovedS").value;
	  var surlgraphic = document.getElementById("surlgraphic").value;
	  var surlgraphiccaption = document.getElementById("surlgraphiccaption").value;
	  var studioid = document.getElementById("studioidS").value;
	  var sneighborhood = document.getElementById("sneighborhood").value;
	  var sregion = document.getElementById("sregion").value;
	  var scity = document.getElementById("scity").value;
	  var sstate = document.getElementById("sstate").value;
	  var szip = document.getElementById("szip").value;
	  var scountry = document.getElementById("scountry").value;
	  var sphone = document.getElementById("sphone").value;
	  var sfax = document.getElementById("sfax").value;
	  var semail = document.getElementById("semail").value;
	  var spersonnel = document.getElementById("spersonnel").value;
	  var sanalogrecorders = document.getElementById("sanalogrecorders").value;
	  var sanalogtracks = document.getElementById("sanalogtracks").value;
	  var sdigitalrecorders = document.getElementById("sdigitalrecorders").value;
	  var sdigitaltracks = document.getElementById("sdigitaltracks").value;
	  //var sanalogmixdown = document.getElementById("sanalogmixdown").value;
	  var sdigitalmixdown = document.getElementById("sdigitalmixdown").value;
	  var sadconverter = document.getElementById("sadconverter").value;
	  var sharddiskrecording = document.getElementById("sharddiskrecording").value;
	  var smonitors = document.getElementById("smonitors").value;
	  var sdescription = document.getElementById("sdescription").value;
	  var sclients = document.getElementById("sclients").value;
	  var sconsole = document.getElementById("sconsole").value;
	  var sawards = document.getElementById("sawards").value;
	  var soutboardgear = document.getElementById("soutboardgear").value;
	  var ssoftwareplugins = document.getElementById("ssoftwareplugins").value;
	  var smicrophones = document.getElementById("smicrophones").value;
	  var surl1 = document.getElementById("surl1").value;
	  var swikiurl = document.getElementById("swikiurl").value;
	  var smyspaceurl = document.getElementById("smyspaceurl").value;

      request.open("POST", url, true);
      request.onreadystatechange = updateStudioPage;
      request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      request.send("sapproved=" + escape(approved)
	  + "&username=" + escape(username)
	  // + "&sid=" + escape(sid)
	  + "&surlgraphic=" + escape(surlgraphic)
	  + "&surlgraphiccaption=" + escape(surlgraphiccaption)
	  + "&studioid=" + escape(studioid)
	  + "&sneighborhood=" + escape(sneighborhood)
	  + "&sregion=" + escape(sregion)
	  + "&scity=" + escape(scity)
	  + "&sstate=" + escape(sstate)
	  + "&szip=" + escape(szip)
	  + "&scountry=" + escape(scountry)
	  + "&sphone=" + escape(sphone)
	  + "&sfax=" + escape(sfax)
	  + "&semail=" + escape(semail)
	  + "&spersonnel=" + escape(spersonnel)
	  + "&sanalogrecorders=" + escape(sanalogrecorders)
	  + "&sanalogtracks=" + escape(sanalogtracks)
	  + "&sdigitalrecorders=" + escape(sdigitalrecorders)
	  + "&sdigitaltracks=" + escape(sdigitaltracks)
	  //+ "&sanalogmixdown=" + escape(sanalogmixdown)
	  + "&sdigitalmixdown=" + escape(sdigitalmixdown)
	  + "&sadconverter=" + escape(sadconverter)
	  + "&sharddiskrecording=" + escape(sharddiskrecording)
	  + "&sconsole=" + escape(sconsole)
	  + "&smonitors=" + escape(smonitors)
	  + "&sdescription=" + escape(sdescription)
	  + "&sclients=" + escape(sclients)
	  + "&sawards=" + escape(sawards)
	  + "&soutboardgear=" + escape(soutboardgear)
	  + "&ssoftwareplugins=" + escape(ssoftwareplugins)
	  + "&smicrophones=" + escape(smicrophones)
	  + "&surl1=" + escape(surl1)
	  + "&swikiurl=" + escape(swikiurl)
	  + "&smyspaceurl=" + escape(smyspaceurl));
    }
    

    function getStudio() {
         var url = "add/process/studioProcess.php";
         request.open("POST", url, true);
         request.onreadystatechange = updateStudioPage;
         request.send(null);
      }
    
    function updateStudioPage() {
        if (request.readyState == 4) {
        if (request.status == 200) {
          var studioResponse = request.responseText;
          var updateStudioprint = document.getElementById('printStudioUpdate');	  
   		
          updateStudioprint.innerHTML = studioResponse;	
          var confirmButStudio = document.getElementById("confirmStudioButton");
          confirmButStudio.className = 'complete';
          confirmButStudio.value = 'Studio Added';  
        } 
      }
    }

	function resetConfirmStudioText() {
		//var confirmedStudio = document.getElementById("confirmStudio");
		var confirmButStudio = document.getElementById("confirmStudioButton");
		confirmButStudio.className = 'prompt';
		confirmButStudio.value = 'Add Studio';
	}