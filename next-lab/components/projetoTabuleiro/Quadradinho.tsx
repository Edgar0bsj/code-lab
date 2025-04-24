import styles from "../../styles/projetoTabuleiro/subdivisao.module.css"

const Subdivisao = (props:any) => {
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