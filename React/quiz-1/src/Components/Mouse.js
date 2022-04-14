import { useEffect, useState } from "react";

const Cube = () => {
  const [coordinates, setCoordinates] = useState([0, 0]);
  const handleMouseMove = (e) => {
    const back = e.target.getBoundingClientRect();
    const x = Math.round(e.screenX - back.left);
    const y = Math.round(e.screenY - 2 * back.top);
    setCoordinates([x, y]);
  };

  useEffect(() => {
    const back = document.getElementById("back");
    back.addEventListener("mousemove", handleMouseMove);

    return () => {
        back.removeEventListener("mousemove", handleMouseMove);
    };
  }, []);

  return (
    <div className="cube">
      <div className="back" id="back">
        <h2 className="xy">
          X: {coordinates[0]}, Y: {coordinates[1]}
        </h2>

        <div
          className="square"
          id="square"
          style={{ left: coordinates[0] + "px", top: coordinates[1] }}
        ></div>
      </div>
    </div>
  );
};

export default Cube;