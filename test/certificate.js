var Certificate = artifacts.require("./Certificate.sol");

contract("Certificate", function(accounts) {
  var certificateInstance;
    
    it("checks for proper account", function() {
    return Certificate.deployed().then(function(instance) {
//      return instance.candidatesCount();
        
    }).then(function(c) {
        var a=accounts[0];
      assert.equal(a, "0xe12B3C1dFE2bcEa4b13D99833504166ffe77896C");
    });
  });
    
});