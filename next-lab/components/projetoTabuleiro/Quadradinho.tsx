import styles from "./styles/subdivisao.module.css"
import {propsTabuleiro} from "./Interface"

const Subdivisao = (props:propsTabuleiro) => {
    return (
        <div
            style={{
                backgroundColor: props.preta ? "#000" : "#fff"
            }}
            className={styles.subdivisao}
        >
        </div>
    )
};

export default Subdivisao;