<!DOCTYPE html>

<html lang="pt-br" >

<head>
  <title>Cantenna Calculator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>


<body class="bodyclass" onload="DoIt(document.theForm)">

<div class="div001">
<h1>Calculadora Cantenna</h1>
</div>


</div>

<form name="theForm">

<table>

<tr> 
  <td>Frequency</td> 
  <td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="2.442" name="frequency"><br>
         <span class="input-group-addon">GHz</span>
  </div>  

<select class="input4" name="selectFrequency" SIZE=1 onChange="setFrequency(this.form, this.form.selectFrequency)">
<option value="2.412">B/G Channel 1</option>
<option value="2.417">B/G Channel 2</option>
<option value="2.422">B/G Channel 3</option>
<option value="2.427">B/G Channel 4</option>
<option value="2.432">B/G Channel 5</option>
<option value="2.437">B/G Channel 6</option>
<option SELECTED value="2.442">B/G Channel 7</option>
<option value="2.447">B/G Channel 8</option>
<option value="2.452">B/G Channel 9</option>
<option value="2.457">B/G Channel 10</option>
<option value="2.462">B/G Channel 11</option>
<option value="2.467">B/G Channel 12</option>
<option value="2.472">B/G Channel 13</option>
<option value="2.484">B/G Channel 14</option>
<option disabled>-NZ Indoor-</option>
<option value="5.170">A Channel 34</option>
<option value="5.180">A Channel 36</option>
<option value="5.190">A Channel 38</option>
<option value="5.200">A Channel 40</option>
<option value="5.210">A Channel 42 (mid-range)</option>
<option value="5.220">A Channel 44</option>
<option value="5.230">A Channel 46</option>
<option value="5.240">A Channel 48</option>
<option disabled>-NZ outdoor low-</option>
<option value="5.250">A Channel 50</option>
<option value="5.260">A Channel 52</option>
<option value="5.280">A Channel 56</option>
<option value="5.285">A Channel 57 (mid-range)</option>
<option value="5.290">A Channel 58</option>
<option value="5.300">A Channel 60</option>
<option value="5.320">A Channel 64</option>
<option disabled>-NZ Outdoor High-</option>
<option value="5.745">A Channel 149</option>
<option value="5.760">A Channel 152</option>
<option value="5.765">A Channel 153</option>
<option value="5.785">A Channel 157 (mid-range)</option>
<option value="5.800">A Channel 160</option>
<option value="5.805">A Channel 161</option>
<option value="5.825">A Channel 165</option>
</select>

<td>Diâmetro</td>

<td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="80" name="Diameter"/><br>
         <span class="input-group-addon">mm</span>
  </div>  
  <input class="input4"  type="text" value="" disabled="true" name="message"/>

<!-- Coluna 2 -->
<tr>
  <td>
    <span class="name">Free Space Wavelength</span><br/>
    <span class="subtext">Waveguide Wavelength</span>
    
  </td>

  <td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="lamda0"/>
         <span class="input-group-addon">mm</span>
  </div>  
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="lamdaG"/>
         <span class="input-group-addon">mm</span>
  </div>  
  </td>

  <td>
    <span class="name">Max Frequency</span><br/>
    <span class="subtext">Min Frequency</span>
  </td>

  <td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="maxF" />
         <span class="input-group-addon">GHz</span>
  </div>  
  <div class="input3 input-group suffix">                           
  <input class="input3"type="text" value="" name="minF" />
         <span class="input-group-addon">GHz</span>
  </div>  
  </td>

</tr>

<!-- Coluna 3 -->
<tr>
  <td>
    <span class="name">Inside Length</span><br/>
    <span class="subtext">Probe Length</span>
  </td>

  <td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="cavityLength"/><br/>
         <span class="input-group-addon">mm</span>
  </div>  
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="lamda0_25"/>
         <span class="input-group-addon">mm</span>
</div>
  </td>

  <td>
    <span class="name">Open End to Probe</span><br/>
    <span class="subtext">Probe to Reflector</span>
  </td>

  <td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="slotProbe" /><br/>
         <span class="input-group-addon">mm</span>
  </div>  
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="probeBottom" />
         <span class="input-group-addon">mm</span>
  </div>  
  </td>
 


  <tr>
  <td>
    <span class="name">Cut Off Frequency</span><br/><br/>
  </td>

  <td>
  <div class="input3 input-group suffix">                           
  <input class="input3" type="text" value="" name="cutoffF" />
         <span class="input-group-addon">GHz</span>
  </div>  
  </td>

  <td>
  <INPUT class="btnB" onclick="DoIt(this.form)" type="button" value="Calcular">
  <INPUT class="btnB" onclick="DoIt(this.form)" type="button" value="Imprimir">
  </td>

 </tr>
 

</tr>
</table>
</form>


   
                  


  <!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script  src="./script.js"></script>
  <script  src="./script2.js"></script>


  <footer>
    <div>
<p class="text-center truncate" style="color:rgb(0, 0, 0); margin-top:35px;">
    <svg aria-hidden="true" height="24" viewBox="0 0 16 16" version="1.1" width="24" data-view-component="true" class="octicon octicon-mark-github">
        <path style="margin-right: 5px;" fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
    </svg>     
    </p>
    <span>© 2022 AYER Incorporation </span>
</div>
    
</footer>

</body>


<script language=JavaScript>
function clearResults(form)
{
	form.lamda0.value = "";
	form.lamda0_25.value= "";
	form.lamdaG.value= "";
	
	form.cavityLength.value = "";
	form.probeBottom.value = "";
	form.cutoffF.value = "";
	form.maxF.value = "";
	form.minF.value = "";
}
function DoIt(form)
{
	form.message.value="";
	
	var l0 = (299.702547/form.frequency.value);
	var lc = 3.41/2*Number(form.Diameter.value);
	var lu = 3.2/2*Number(form.Diameter.value);
	var ls = 2.8/2*Number(form.Diameter.value);
	var lg = (1/Math.sqrt(1/(l0*l0) - 1/(lc*lc)));
	
	if(lu < l0)
		form.message.value="Muito Pequeno";
	else if(ls > l0)
		form.message.value="Muito Grande";

	form.lamda0.value = Math.round(l0*10)/10;
	form.lamda0_25.value=Math.round(l0/4*10)/10;
	form.lamdaG.value= Math.round(lg*10)/10;
	form.cutoffF.value = Math.round(299.702547/lc*1000)/1000;
	form.maxF.value = Math.round(299.702547/ls*1000)/1000;
	form.minF.value = Math.round(299.702547/lu*1000)/1000;
	
	form.cavityLength.value = Math.round(0.75*lg*10)/10;
	form.probeBottom.value = Math.round(0.25*lg*10)/10;
	form.slotProbe.value = Math.round(0.5*lg*10)/10;
	
}
function setFrequency(form, theSelect)
{
	form.frequency.value = theSelect.options[theSelect.selectedIndex].value;
	var l0 = (299.702547/form.frequency.value);
	form.Diameter.value = Math.round(2*l0/3);
	DoIt(document.theForm);
}
</script>

<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script>
    function pdf(){
        var element = document.getElementById('save-to-pdf');
  var opt = {
  margin:       0,
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 1 } ,
  html2canvas:  { scale: 1 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' },
};
// New Promise-based usage:
html2pdf().set(opt).from(element).save();}
</script>