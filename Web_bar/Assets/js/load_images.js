
const getter_type = document.getElementById('getter_script').getAttribute('data-name');

var httpr = new XMLHttpRequest();

var data = null;

httpr.open("GET","../../Models/get_data.php?getter="+getter_type,true);
httpr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
httpr.send(null);
httpr.onreadystatechange=function(){
    if(httpr.readyState == 4 && httpr.status == 200){
        data = JSON.parse(this.responseText);
        data.sort((a,b) => (a.name > b.name) ? 1 : -1);

        var pics = document.getElementById("pics");

        var numb = data.length;
        var count = 0;

        var grids = "g-" + Math.ceil(numb/3);

        var newrow = document.createElement("div");
        newrow.classList.add("row");
        newrow.classList.add(grids);
        newrow.classList.add("gy-5");
        pics.appendChild(newrow);

        for(var j = 0; j < numb; j++){
            
            var newdiv1 = document.createElement("div");
            newdiv1.classList.add("col-12");
            newdiv1.classList.add("col-md-6");
            newdiv1.classList.add("col-lg-4");
            var newdiv2 = document.createElement("div");
            newdiv2.classList.add("card");
            newdiv2.style.width = "18rem";
            var newimg = document.createElement("img");
            newimg.src = "../../Assets/" + data[count].path;
            newimg.style = "height: 300px;object-fit: cover";
            newimg.classList.add("card-img-top");
            newimg.alt = data[count].path;
            var newdiv3 = document.createElement("div");
            newdiv3.classList.add("card-body");
            var newdiv4 = document.createElement("div");
            newdiv4.classList.add("row");
            var newdiv5 = document.createElement("div");
            newdiv5.classList.add("col");
            var newh4 = document.createElement("h4");
            var h4node = document.createTextNode(data[count].name)
            var newdiv6 = document.createElement("div");
            newdiv6.classList.add("row");
            newdiv6.classList.add("mt-4");
            var newdiv7 = document.createElement("div");
            newdiv7.classList.add("col");
            var newp1 = document.createElement("p");
            newp1.style = "font-size: 40px"
            var p1node = document.createTextNode(data[count].alcohol == 1 ? "🍹" : data[count].alcohol == 0 ? "🥤" : "");
            var newdiv8 = document.createElement("div");
            newdiv8.classList.add("col");
            var newp2 = document.createElement("p");
            newp2.style = "font-size: 40px"
            var p2node = document.createTextNode(data[count].temperature == 0 ? "❄" : data[count].temperature == 1 ? "🔥" : "");

            
            newrow.appendChild(newdiv1);
            newdiv1.appendChild(newdiv2);
            newdiv2.appendChild(newimg);
            newdiv2.appendChild(newdiv3);
            newdiv3.appendChild(newdiv4);
            newdiv4.appendChild(newdiv5);
            newdiv5.appendChild(newh4);
            newh4.appendChild(h4node);
            newdiv3.appendChild(newdiv6);
            newdiv6.appendChild(newdiv7);
            newdiv7.appendChild(newp1);
            newp1.appendChild(p1node);
            newdiv6.appendChild(newdiv8);
            newdiv8.appendChild(newp2);
            newp2.appendChild(p2node);
            count++;
            
        }
    }

}


