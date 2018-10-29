#include <stdio.h>
#include <string.h>

// A very simple crackme which stores the correct password in program memory
// and uses the builtin string comparison function to check it.

int main(int argc, char** argv) {

    if (argc != 2) {
        printf("Need exactly one argument.\n");
        return -1;
    }

	char str[100];

    char* correct = "password1";
    char* correct1 = "DragonStone";
    char* correct2 = "winterfall";
    char* correct3= "I want to be your friend";
 
    char* correct4 = "jhsdjygfehvhjriufksdj";
    char* correct5 = "we recovered winterfell";
    char* correct6 = "hail to the king of the north";
    char* correct7 = "valar morghulis";
    char* correct8 = "winter is comming";
    char* correct14 = "jhsdfiuw8723uyejrteer";
    char* correct9 = "Argument1 is";
    char* correct10 = "A clash of kings";
    char* correct11 = "Many faced God";
    char* correct12 = "The hound";
    char* correct13 = "Tagaryen";

	char flag[]= "RememberMeForNext";

    if (strncmp(argv[1], correct12, strlen(correct12))) {
        printf("No, %s is not correct.\n", argv[1]);
        return 1;
    } else {
        printf("Yes, %s is correct!\n", argv[1]);
	printf("Enter secret password to retrieve the flag:\n");

	scanf("%s",str);
	//printf(str);

	if (strcmp(flag,str)==0){
		printf("%s",correct4);
	}

        return 0;
    }
	

}
