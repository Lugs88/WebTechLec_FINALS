var ctr = 0;
$.getJSON('../json/securityquiz.json', function (data) {
   $.each(data.mc, function (index, val) {
      ctr = 0;
      
      var print = "<li class='container'><strong>" + val.question + "</strong><br>";
      print += "<div class='mt-2'>";
      print += "<label><span class='mr-1'><input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='a'></span>" + val.choices[ctr].a + "</label><br>";
      ctr++;
      print += "<label><span class='mr-1'><input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='b'></span>" + val.choices[ctr].b + "</label><br>";
      ctr++;
      print += "<label><span class='mr-1'><input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='c'></span>" + val.choices[ctr].c + "</label><br>";
      ctr++;
      print += "<label><span class='mr-1'><input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='d'></span>" + val.choices[ctr].d + "</label><br>";
      print += "</div></li><br>"; 

      $(print).appendTo("#quiz-list");
   }); 

   $.each(data.tf, function (index, val) {
      ctr = 0;
       
      var print = "<li class='container'><strong>" + val.question + "</strong><br>";
      print += "<div class='mt-2'>";
      print += "<label><span class='mr-1'><input type='radio' id='tf"+ctr+"' name='"+val.name+"' value='a'></span>" + val.choices[ctr].a + "</label><br>";
      ctr++;
      print += "<label><span class='mr-1'><input type='radio' id='tf"+ctr+"' name='"+val.name+"' value='b'></span>" + val.choices[ctr].b + "</label><br>";
      print += "</div></li><br>"; 

      $(print).appendTo("#quiz-list");
   }); 
    
   $.each(data.iden, function (index, val) {
      ctr = 0;
       
      var print = "<li class='container'><strong>" + val.question + "</strong><br>";
      print += "<div class='mt-2'>";
      print += "<label for='"+val.name+"' id='iden'> Answer: </label>";
      print += "<input type='text' id='iden"+ctr+"' name='"+val.name+"' class='iden' autocomplete='off'>";
      print += "</div></li><br>";

      $(print).appendTo("#quiz-list");
   }); 
});