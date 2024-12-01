var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    console.log(count);
	if (count % 2 == 0) { //проверка на четность
		//очищаем тег
        console.log("popali");
        document.getElemetnById("clc_img").innerHTML = "";
	} else {
		//добавляем изображение
        var img = document.createElement("img");
        img.src = "https://avatars.mds.yandex.net/get-weather/10931474/EvObwyoKkVSgjTCHtVmS/orig";
        img.id = "clc_img"
        document.getElementById("demo").appendChild(img);
	}
}
