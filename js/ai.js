var config = {
    apiKey: "AIzaSyCadrAhTUAoCJIhivk8QTXtsSPaj5AlyR8",
    authDomain: "exacoin-hk.firebaseapp.com",
    databaseURL: "https://exacoin-hk.firebaseio.com",
    projectId: "exacoin-hk",
    storageBucket: "exacoin-hk.appspot.com",
    messagingSenderId: "792284917444"
};
firebase.initializeApp(config);
var db = firebase.firestore();

function localTimezone(date, offsetText) {
    if (date && typeof date.getTimezoneOffset == 'function') {
        var offset = date.getTimezoneOffset() / 60;
        if (!offsetText) offsetText = 'Local Time UTC';
        if (offset > 0) {
            offsetText += '-' + offset;
        } else if (offset < 0) {
            offsetText += '+' + (-offset);
        }
        return '(' + offsetText + ')';
    }
    return '';
}
var exchange_col = db.collection("public").doc('exchange');
exchange_col.onSnapshot(function(doc) {
    if (!doc.exists) {
        console.log("rates/latest don't exist");
    } else {
        let data = doc.data();
        var currentdate = new Date();
        var date_n = currentdate.getDate().toString() + (currentdate.getMonth()+1).toString()  + currentdate.getFullYear().toString();
        var time_n = currentdate.getHours().toString() + currentdate.getMinutes().toString() + currentdate.getSeconds().toString();

        var json_data = {
          "date" : date_n,
          "time" : time_n,
          "price_exa" : "$" + Number(data.last_usd).format(2),
          "btc_exa" : Number(data.last_btc).format(8),
          "eth_exa" : Number(data.last_eth).format(8),
          "24_low" : "$" + Number(data.low24h_usd).format(2),
          "24_high" : "$" + Number(data.high24h_usd).format(2),
          "24_vol" : "$" + Number(data.vol24h_usd.replace(/[,]/g, "")).format(2)
        }
        tmp = JSON.stringify(json_data);
        $.ajax({
          type: 'POST',
          url: 'insert.php',
          data: {'data': tmp}
        });
    }
});

Number.prototype.format = function(n, x) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
};
