pragma solidity 0.4.25;

contract Certificate{
	
	struct Student{

		uint id;
		string commitee_name;
		string certificate_of;
		//string issued_by;
		string first_name;
		//string last_name;
		string rank;
		string field;


		//string hod_name;
		//string principal_name;


		bool hod_verified;
		bool principal_verified;
		string qr_code;
	}

	mapping(uint => Student) public students;
	uint public studentsCount;
	constructor () public {
    addStudent("csi","Appreciation","Sanjays","First","Academics",false,false,"QR HASH");
    addStudent("csi","Appreciation","JT","First","Academics",false,false,"QR HASH");
   
        
   }



    function addStudent (string commitee_name,string certificate_of,string first_name,string rank,string field,bool hod_verified,bool principal_verified,string qr_code) public {

        studentsCount ++;
        students[studentsCount] = Student(studentsCount,commitee_name,certificate_of,first_name,rank,field,hod_verified,principal_verified,qr_code);

    }

    function updateStudent_hod(uint id)
    {
     students[id].hod_verified=true;
    }



    function updateStudent_pri(uint id)
    {
     students[id].principal_verified=true;
    }	


}