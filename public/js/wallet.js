$(document).ready(function () {
    $("input:checkbox").change(function () {
        var val = $(this).val();
        console.log(val);
        if ($(walletstatust).is(":checked")) {
            $("#walletstatust").prop("checked", true);
            var val = 1;

            $.ajax({
                url: 'active',
                method: 'get',
                data: {
                    wallet: 1,
                },
                success: function (response, data) {

                    window.location.reload();
                }
            })
        } else {
            $("#walletstatust").prop("checked", false);
            var val = 1;

            $.ajax({
                url: 'active',
                method: 'get',
                data: {
                    wallet: 0,
                },
                success: function (response, data) {

                    window.location.reload();
                }
            })
        }
    });
});
$(document).on('keyup', '#salary, #bounse , #overtime', function () {
    var tot = document.createElement("input");
    tot.setAttribute("id", "total");
    let sal = parseInt(document.getElementById('salary').value)
    let bou = parseInt(document.getElementById('bounse').value);
    let over = parseInt(document.getElementById('overtime').value);

    if (Number.isNaN(sal)) {
        sal = 0;
        total = total + sal;
    }
    if (Number.isNaN(bou)) {
        bou = 0;
    }
    if (Number.isNaN(over)) {
        over = 0;
    }
    totalsum = sal + bou + over;
    console.log(total);
    total.setAttribute("value", totalsum);
    $.ajax({
        url: 'income',
        method: 'get',
        data: {
            sal: sal,
            bou: bou,
            over: over,
            tot: totalsum
        },
        success: function (response, data) {


        }
    })

});
$(document).on('keyup', '#Food, #Drinks , #Shopping', function () {
    var tot = document.createElement("input");
    tot.setAttribute("id", "total");
    let foo = parseInt(document.getElementById('Food').value)
    let dri = parseInt(document.getElementById('Drinks').value);
    let sho = parseInt(document.getElementById('Shopping').value);

    if (Number.isNaN(foo)) {
        foo = 0;
    }
    if (Number.isNaN(dri)) {
        dri = 0;
    }
    if (Number.isNaN(sho)) {
        sho = 0;
    }
    totalsum = foo + dri + sho;
    console.log(total);
    totalm.setAttribute("value", totalsum);
    $.ajax({
        url: 'expenses',
        method: 'get',
        data: {
            foo: foo,
            dri: dri,
            sho: sho,
            totm: totalsum
        },
        success: function (response, data) {


        }
    })

});
$(document).on('keyup', '#Food, #Drinks , #Shopping ,#salary, #bounse , #overtime ,#totalm, #total ', function () {
    var tot = document.createElement("input");
    tot.setAttribute("id", "total");
    let up = parseInt(document.getElementById('total').value)
    let down = parseInt(document.getElementById('totalm').value);

    if (Number.isNaN(up)) {
        up = 0;
    }
    if (Number.isNaN(down)) {
        down = 0;
    }

    totalsum = up - down;
    if (totalsum > 0) {
        console.log(total);
        balance.setAttribute("value", totalsum);
        $.ajax({
            url: 'balance',
            method: 'get',
            data: {
                balance: totalsum
            },
            success: function (response, data) {


            }
        })
    } else {
        alert("You have exceeded your balance");
        $.ajax({
            url: 'expenses',
            method: 'get',
            data: {
                foo: null,
                dri: null,
                sho: null,
                totm: null
            },
            success: function (response, data) {

                window.location.reload();

            }
        })
    }


});
