#Open Charity Authoring Explanation

###Technonologies and Methodologies Used
. (SASS)[sass-lang.com] (CSS Preprocessor)
. (SMACSS)[www.smacss.com] (Scalable and Modular Architecture for CSS)
. Slick Slider

###Media Queries
. Minimum WIdth: 1200px
. Maximum WIdth: 992px
. Maximum WIdth: 768px


####Why I selected SMACSS?
I used SMACSS because I thought that it keeps the design code more cleaner, more modular and more scalable than others. I personally like the multiple files for each module.
I have created the following files

. reset.sass
All HTML and TAG level resets I have defined here.

. base.sass
Setting up the base of design. Created the generic classes like text-left, left, right etc.

. layout.sass
In Layout file I have created the layout classes. As I am very much fond of Bootstrap and Foundation Zurb thats why I have followed the concept of their Grid System. I have created 12 grids and created their classes for responsiveness in 4 levels. All those classes I have defined in sass.

. module.sass
I have separately designed and colored each and every module in this file. With separate Headings

. state.sass
As the state section was not required in our design thats why I've left it empty.

URL of the Authored index.html file.
[https://github.com/NahyanBinKhalid/open_charity/tree/master/authoring]