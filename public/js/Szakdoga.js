class Szakdoga {
    constructor(elem,adat) {
        this.adat = adat;
        this.elem = elem;
        this.nev = this.elem.find(".nev");
        this.keszitok = this.elem.find(".keszitok");
        this.github = this.elem.find(".github");
        this.oldal = this.elem.find(".oldal");
        this.torlesGomb = this.elem.find(".torol");
        this.modositUrlap = this.elem.find(".modositas");

        this.modositas = this.elem.find("#modosit");
        this.felvetel = this.elem.find("#uj");
        this.torlesGomb.on("click", () => {
            this.kattintasTrigger("torol");
        });
        this.modositUrlap.on("click", () => {
            this.kattintasTrigger("urlapba");
        });
        this.felvetel.on("click", () => {
            this.kattintasTrigger("felvesz");
        });
        this.modositas.on("click", () => {
            this.kattintasTrigger("modosit");
        });

        this.setAdat(this.adat);
    }

    setAdat(adat) {
        this.adat = adat;
        this.nev.text(adat.szakdoga_nev);
        this.github.text(adat.github_link);
        this.oldal.text(adat.oldallink);
        this.keszitok.text(adat.tagokneve);
        this.id = this.adat.id;
    }

    kattintasTrigger(gomb) {
        let esemeny = new CustomEvent(gomb, {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
    }
}
