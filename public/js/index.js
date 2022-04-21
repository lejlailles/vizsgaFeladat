$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new Ajax(token);
    let apiVegpont = "http://localhost:8000/api/szakdogak";
    let torlesApi="http://localhost:8000/api/szakdogak/";

    const szakdogak = [];
    const szuloElem = $(".listaadmin");
    const sablonElem = $(".szakdogaLista");
    ajax.getAdat(apiVegpont, szakdogak, szakdogaMegjelenit);

    szuloElem.empty();

    function szakdogaMegjelenit(szakdogak) {
        sablonElem.show();
        szakdogak.forEach(function (elem) {
            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujSzakdoga = new Szakdoga(ujElem, elem);
        });
        sablonElem.hide();
    }

    $(window).on("urlapba",(event)=>{
        console.log('kattint');
        id=event.detail.id;
        $("#szakdoga_nev").val(event.detail.szakdoga_nev);
        $("#tagokneve").val(event.detail.tagokneve);
        $("#oldallink").val(event.detail.oldallink);
        $("#githublink").val(event.detail.github_link);
     
    });
    $(window).on("felvesz", () => {
     

        let nev = $("#szakdoga_nev").val();
        let keszito = $("#tagokneve").val();
        let github = $("#githublink").val();
        let oldal = $("#oldallink").val();
     
      

        let ujAdat = {
            szakdoga_nev:nev,
            tagokneve:keszito,
            github_link:github,
            oldallink:oldal

          
        };
        ajax.postAdat(apiVegpont, ujAdat);
    });



    $(window).on("torol",(event)=>{            
   ajax.deleteAdat(torlesApi,event.detail.id);
    });
});
