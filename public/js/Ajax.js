class Ajax {
    constructor(token) {
        this.token = token;
    }

    getAdat(apiVegpont, tomb, myCallback) {
        $.ajax({
            url: apiVegpont,
            type: "GET",
            success: function (result) {
                tomb.splice(0, tomb.length);
                result.forEach((value) => {
                    tomb.push(value);
                });

                myCallback(tomb);
            },
        });
    }

    postAdat(apiVegpont, adat) {
        adat._token = this.token;
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apiVegpont,
            type: "POST",
            data: adat,
            success: function (result) {
                console.log(result);
            },
        });
    }

    deleteAdat(apiVegpont, id) {
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apiVegpont + id,
            type: "DELETE",
            data: this.token,
            success: function (result) {
                console.log(result);
            },
        });
    }

    putAdat(apiVegpont, id, adat) {
        adat._token = this.token;
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            datatype: "JSON",
            type: "PUT",
            url: apiVegpont + "/" + id,
            data: adat,
            success: function (result) {
                console.log(result);
            },
        });
    }
}