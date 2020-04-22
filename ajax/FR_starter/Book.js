export class Book {

    constructor(title, author, description, pages, ) {

        this.title = title;
        this.author = author;
        this.description = description;
        this.pages = pages;
        this.currentPage = 1;
        this.read = false;
    }

    readBook(page) {
        if (page > this.pages || page < 1) {
            return 0;

        } else if (page < this.pages && page >= 1) {
            this.currentPage = page;
            this.read = false;
            return 1;

        } else if (page == this.pages) {
            this.currentPage = page;
            this.read = true;
            return 1;
            
        }
    }

}
let firstBook = new Book(
    "L'Homme à l'envers",
    "Fred Vargas",
    "L'Homme à l'envers est un roman policier de Fred Vargas paru en mars 1999.",
    254);

let secondBook = new Book(
    "Double Assassinat dans la rue morgue",
    "Edgar Allan Poe",
    "Double assassinat dans la rue Morgue est une nouvelle de l’écrivain américain Edgar Allan Poe, parue en avril 1841.",
    26);

let thirdBook = new Book(
    "Millenium 1 : Les hommes qui n'aimaient pas les femmes",
    "Stieg Larsson",
    "Les Hommes qui n'aimaient pas les femmes est le premier tome de la trilogie Millénium, écrite par le Suédois Stieg Larsson et paru en 2005.",
    526);

export const books = [firstBook,secondBook,thirdBook];


