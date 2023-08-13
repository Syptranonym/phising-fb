function lamp() {
    let delay = 500;
    delay *= 2; {
        setTimeout(() => {
            document.getElementById("lamp1").classList.toggle("running1");
        }, 500);
        setTimeout(() => {
            document.getElementById("lamp1").classList.toggle("stop1");
        }, 750);

        setTimeout(() => {
            document.getElementById("lamp2").classList.toggle("running2");
        }, 750);
        setTimeout(() => {
            document.getElementById("lamp2").classList.toggle("stop2");
        }, 1000);

        setTimeout(() => {
            document.getElementById("lamp3").classList.toggle("running3");
        }, 1000);
        setTimeout(() => {
            document.getElementById("lamp3").classList.toggle("stop3");
        }, 1250);

        setTimeout(() => {
            document.getElementById("lamp4").classList.toggle("running4");
        }, 1250);
        setTimeout(() => {
            document.getElementById("lamp4").classList.toggle("stop4");
        }, 1500);

        setTimeout(() => {
            document.getElementById("lamp5").classList.toggle("running5");
        }, 1500);
        setTimeout(() => {
            document.getElementById("lamp5").classList.toggle("stop5");
        }, 1750);
        //kebalikan dari kanan kekiri maka sekarang dari kiri kekanan
        setTimeout(() => {
            document.getElementById("lamp6").classList.toggle("running6");
        }, 1500);
        setTimeout(() => {
            document.getElementById("lamp6").classList.toggle("stop6");
        }, 1750);

        setTimeout(() => {
            document.getElementById("lamp7").classList.toggle("running7");
        }, 1250);
        setTimeout(() => {
            document.getElementById("lamp7").classList.toggle("stop7");
        }, 1500);

        setTimeout(() => {
            document.getElementById("lamp8").classList.toggle("running8");
        }, 1000);
        setTimeout(() => {
            document.getElementById("lamp8").classList.toggle("stop8");
        }, 1250);

        setTimeout(() => {
            document.getElementById("lamp9").classList.toggle("running9");
        }, 750);
        setTimeout(() => {
            document.getElementById("lamp9").classList.toggle("stop9");
        }, 1000);

        setTimeout(() => {
            document.getElementById("lamp10").classList.toggle("running10");
        }, 500);
        setTimeout(() => {
            document.getElementById("lamp10").classList.toggle("stop10");
        }, 750);

        setTimeout(lamp, delay);
    }
}