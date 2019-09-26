let instance;

class MySqlManager
{
    constructor() {
		if (!instance){
			instance = this;
			console.log("New Instance");
			
			return instance;
		}else{
			console.log("Old Instance");
			
			return instance;
		}
    }
    
    set setHost(hostName){
        this.host = hostName;
    }

    get getHost(){
        return this.host;
    }
	
	connect(){
        console.log("Connect DB: "+this.getHost);
    }
}

module.exports = MySqlManager;