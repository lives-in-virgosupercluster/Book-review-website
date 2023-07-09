const banners = [
    {
      id: 1,
      name: "Tonoharu",
      description:
        " Daniel Wells working as an assistant teacher is the only American in the Japanese town of Tōnoharu",
      img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWPqOXlyaAUUC_KwT7PKLZAyXjfzMipm3pBQ&usqp=CAU",
      genre: "Comics & Graphic Novels",
    },
    {
      id: 2,
      name: "Tonoharu",
      description:
        " Daniel Wells working as an assistant teacher is the only American in the Japanese town of Tōnoharu",
      img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr-PcsmvwilqnCwDnAbfCzZH9ui46v10WsIg&usqp=CAU",
      genre: "Comics Novels",
    },
    {
      id: 3,
      name: "Tonoharu",
      description:
        " Daniel Wells working as an assistant teacher is the only American in the Japanese town of Tōnoharu",
      img: "https://static-cse.canva.com/blob/921487/ColorfulIllustrationYoungAdultBookCover.jpg",
      genre: " Novels",
    },
  ];
  
  const booksShowcase = [
    "https://e3t6q7b4.stackpathcdn.com/wp-content/uploads/2018/09/five-feet-apart-9781534437333_hr-679x1024.jpg",
    "https://i.pinimg.com/736x/29/88/8d/29888ddd30d450cfcd07b33de0899e19.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTln5EGehYz-UCtkr0C-oz7bYgtocNiXb8hPPIpfJ2MZCdHIlj3UuNyzvKh0VQPm2yNRZc&usqp=CAU",
    "https://i.pinimg.com/736x/f9/5d/1a/f95d1a78ce236ebe47fc25aba74ba776.jpg",
    "https://template.canva.com/EADaopxBna4/1/0/251w-ujD6UPGa9hw.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKSKzOgiuAF6hNsTtPlRf6US9moDgnqMjUOQP9a8BFWkdKgEMtzSFBdgqLObxI1b4D6_U&usqp=CAU",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRrrf_JwhAqLu82HPKMV9K7bMaV_cINHsgzYhVBS3W0wJJUjBw_9u3BudxsfD9N3T_4CQ&usqp=CAU",
    "https://images.template.net/2905/Simple-Children-s-Story-Book-Cover-Template-2x.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQVsgUcl4MhV1I9ZG93fpQ-PgZD8eoDRC_FvmpoCpAT2XkZL9amHv6SzFDxP0VjfHu2sM&usqp=CAU",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRY1FWuwC2pGHdB3PhByNuTAy1seurTKGNCRO21Vk_aJ36Y1TBsB2co7V3C8oDg3AKJtNM&usqp=CAU",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVkicQClYw9bRp5_nccXcEgigZXivQy8VqLA&usqp=CAU",
    "https://www.adobe.com/express/create/cover/media_181e3d2c78f153ae7bf0e19a2faeb9a76e234da30.jpeg?width=400&format=jpeg&optimize=medium",
  ];
  
  for (let i = 0; i < banners.length; i++) {
    document.getElementsByClassName("banner-name")[i].innerHTML = banners[i].name;
    document.getElementsByClassName("banner-description")[i].innerHTML =
      banners[i].description;
    document.getElementsByClassName("banner-genre")[i].innerHTML =
      banners[i].genre;
    document.getElementsByClassName("banner-img")[i].src = banners[i].img;
  }
  
  for (let i = 0; i < booksShowcase.length; i++) {
    let imgA = document.createElement("img");
    imgA.src = booksShowcase[i];
    imgA.className = "books-img";
    document.getElementById("books-showcase").appendChild(imgA);
    //   document.getElementById("books-showcase").append(imgObj);
  }