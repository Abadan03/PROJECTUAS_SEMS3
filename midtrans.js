const midtransClient = require('midtrans-client');
const express = require('express')
const app = express();
// Create Snap API instance
let snap = new midtransClient.Snap({
        // Set to true if you want Production Environment (accept real transaction).
        isProduction : false,
        serverKey : 'SB-Mid-server-YzhffoWt9zXXaCuEdAPkbyZj'
    });
 
let parameter = {
    "transaction_details": {
        "order_id": "test-id-12109",
        "gross_amount": 10000
    },
    "credit_card":{
        "secure" : true
    },
    "customer_details": {
        "first_name": "budi",
        "last_name": "pratama",
        "email": "budi.pra@example.com",
        "phone": "08111222333"
    }
};
 
snap.createTransaction(parameter)
    .then((transaction)=>{
        // transaction token
        let transactionToken = transaction.token;
        console.log('transactionToken:', transactionToken);
        // app.get('')
    })

app.listen(console.log('berhasil'))
// var token = transactionToken

// app.post('/Project_uas_semester3/Project_Final_UAS/UAS_SEMS_3/views/showdata.php', token)
// export {transactionToken}