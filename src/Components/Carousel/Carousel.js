import React from "react";
import { Carousel } from "antd";

const CarouselDefault = () => (
  <Carousel effect="fade" autoplay autoplaySpeed={2000} swipe>
    <div>
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg"
        alt=""
        style={{ height: "320px", objectFit: "cover", width: "100%" }}
      />
    </div>
    <div>
      <img
        src="https://progressivecleaningcorp.com/wp-content/uploads/2023/06/Deep-Cleaners-In-Alexandria-VA.jpg"
        alt=""
        style={{ height: "320px", objectFit: "cover", width: "100%" }}
      />
    </div>
    <div>
      <img
        src="https://www.thesun.co.uk/wp-content/uploads/2021/12/MT-SHOPPING-OFF-PLATT.jpg?strip=all&quality=100&w=1200&h=800&crop=1"
        alt=""
        style={{ height: "320px", objectFit: "cover", width: "100%" }}
      />
    </div>
    <div>
      <img
        src="https://seleritysas.com/wp-content/uploads/2020/10/shutterstock_1149399851.jpg"
        alt=""
        style={{ height: "320px", objectFit: "cover", width: "100%" }}
      />
    </div>
  </Carousel>
);

export default CarouselDefault;
