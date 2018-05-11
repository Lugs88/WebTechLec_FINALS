var ctr = 0;
$.getJSON('../json/servletquiz.json', function (data) {
   $.each(data.mc, function (index, val) {
      ctr = 0;
      
      var print = "<li><strong>" + val.question + "</strong><br>";
      print += "<div class='choice-section'>";
      print += "<label> <input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='a'>" + val.choices[ctr].a + "</label><br>";
      ctr++;
      print += "<label> <input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='b'>" + val.choices[ctr].b + "</label><br>";
      ctr++;
      print += "<label> <input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='c'>" + val.choices[ctr].c + "</label><br>";
      ctr++;
      print += "<label> <input type='radio' id='mc"+ctr+"' name='"+val.name+"' value='d'>" + val.choices[ctr].d + "</label><br>";
      print += "</div></li>"; 

      $(print).appendTo("#quiz-list");
   }); 

   $.each(data.tf, function (index, val) {
      ctr = 0;
       
      var print = "<li><strong>" + val.question + "</strong><br>";
      print += "<div class='choice-section'>";
      print += "<label> <input type='radio' id='tf"+ctr+"' name='"+val.name+"' value='a'>" + val.choices[ctr].a + "</label><br>";
      ctr++;
      print += "<label> <input type='radio' id='tf"+ctr+"' name='"+val.name+"' value='b'>" + val.choices[ctr].b + "</label><br>";
      print += "</div></li>"; 

      $(print).appendTo("#quiz-list");
   }); 
    
   $.each(data.iden, function (index, val) {
      ctr = 0;
       
      var print = "<li><strong>" + val.question + "</strong><br>";
      print += "<div class='choice-section'>";
      print += "<label for='"+val.name+"' id='iden'> Answer: </label>";
      print += "<input type='text' id='iden"+ctr+"' name='"+val.name+"' placeholder='Answer..' class='iden'>";
      print += "</div></li>";

      $(print).appendTo("#quiz-list");
   }); 
});