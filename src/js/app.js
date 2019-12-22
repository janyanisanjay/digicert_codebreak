// window.alert();
App = {
  web3Provider: null,
  contracts: {},
  account: '0x0',


init: function() {
    return App.initWeb3();
  },

initWeb3: function() {
    // TODO: refactor conditional
    if (typeof web3 !== 'undefined') {
      // If a web3 instance is already provided by Meta Mask.
      App.web3Provider = web3.currentProvider;
      web3 = new Web3(web3.currentProvider);
    } else {
      // Specify default instance if no web3 instance provided
      App.web3Provider = new Web3.providers.HttpProvider('http://localhost:7545');
      web3 = new Web3(App.web3Provider);
    }
    return App.initContract();
  },



  initContract: function() {
    $.getJSON("Certificate.json", function(certificate) {
      // Instantiate a new truffle contract from the artifact
      App.contracts.Certificate = TruffleContract(certificate);
      // Connect provider to interact with contract
      App.contracts.Certificate.setProvider(App.web3Provider);

      //App.listenForEvents();

      return App.render();
    });
  },







render: function() {
    var studentInstance;
    var loader = $("#loader");
    var content = $("#content");


    loader.show();
    //content.hide();

    // Load account data
    // web3.eth.getAccounts().then(function (result){
    //   //return result[0]
    //   App.account=result[0]
    //   $("#accountAddress").html("Your Account: " + result[0]);
    //   });

      //web3.eth.getA 





    web3.eth.getCoinbase(function(err, account) {
      if (err === null) {
        //var account = web3.eth.accounts[1];
        App.account = account;
        //web3.eth.getAccounts(accounts => console.log(accounts[0])).
        $("#accountAddress").html(  account);
      }
    }).catch(function(error) {
      console.warn(error);
    });
  },


  addStudent: function() {
      
      $("#loader").hide();
      var first_name = $('#first_name').val();
      var rank = $('#rank').val();
      var field = $('#field').val();
      var email=$('#email').val();
      //var rank = $('#rank').val();
      //var field = $('#field').val();
      var commitee_name = localStorage.getItem("commitee_name_new");
      var certificate_of = localStorage.getItem("certificate_of_new");
      //var commitee_name="PRAI";
      //var certificate_of = "Appre";  
      var qr ="QR HASH";


//      $("#dip").html("New record inserted");
//      window.alert(first_name);
      App.contracts.Certificate.deployed().then(function(instance) {
      return instance.addStudent(commitee_name,certificate_of,first_name,rank,field,false,false,qr, { from: App.account,gas:300000 });
    }).then(function(result) {
      // Wait for votes to update
      // $("#content").hide();
      $("#loaders").hide();
       window.location.href= "http://localhost/certificate/src/student_insert.php?cn="+commitee_name+"&cf="+first_name+"&r="+rank+"&f="+field+"&e="+email;
    }).catch(function(err) {
      console.error(err);
    });

  },



  // fetchStudents: function(){
  //   $("#test").html("Clicked");

  // }


  fetchStudents: function() {
      //$("#test").html("done");
      window.alert();
      App.contracts.Certificate.deployed().then(function(instance) {
      studentInstance = instance;
      return instance.updateStudent_hod(1 ,{ from: App.account,gas:300000 });
      // return studentInstance.studentsCount();
    }).then(function(studentsCount) {
      //var candidatesResults = $("#candidatesResults");
      //candidatesResults.empty();

      //var candidatesSelect = $('#candidatesSelect');
      //candidatesSelect.empty();
      // window.alert(studentsCount);
      
      // for (var i = 1; i <= studentsCount; i++) {
      //   studentInstance.candidates(i).then(function(candidate) {
      //     var id = candidate[0];
      //     var name = candidate[1];
      //     var voteCount = candidate[2];

      //     // Render candidate Result
      //     var candidateTemplate = "<tr><th>" + id + "</th><td>" + name + "</td><td>" + voteCount + "</td></tr>"
      //     candidatesResults.append(candidateTemplate);

      //     // Render candidate ballot option
      //     var candidateOption = "<option value='" + id + "' >" + name + "</ option>"
      //     candidatesSelect.append(candidateOption);
      //   });
      // }
      // return studentInstance.voters(App.account);
    })
  },


    verify_by_hod: function() {
      //$("#test").html("done");

       // window.alert(); 
      App.contracts.Certificate.deployed().then(function(instance) {
      return instance.updateStudent(1, { from: App.account,gas:300000 });
    }).then(function(result) {
      window.alert();
      // Wait for votes to update
      // $("#content").hide();
      //$("#loaders").hide();
       //window.location.href= "http://localhost/certificate/src/student_insert.php?cn="+commitee_name+"&cf="+first_name+"&r="+rank+"&f="+field;
    }).catch(function(err) {
      console.error(err);
    });
  },

};


$(function() {
  $(window).load(function() {
    App.init();
  });
});
