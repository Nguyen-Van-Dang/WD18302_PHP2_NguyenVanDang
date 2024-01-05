<!-- view -->
<form method="post">
    <?= $page_content; ?>
    <label class="select">
        <select name="subject">
            <? foreach ($list_of_key as $key ) : ?>
                <option value="<?= $key ?>"><?= $key ?></option>
            <? endforeach; ?>
        </select>
    </label>
    <button type="submit" name="submit">Tìm</button>
</form>
<style>
    :root {
        --background: linear-gradient(30deg, #f39c12 30%, #f1c40f);
        --background-select: linear-gradient(to left, #34495e 3rem, #2c3e50 3rem);
    } *, *::before, *::after {
        box-sizing: border-box;
    }
    body {
        display: grid;
        place-content: center;
        background: var(--background);
        color: white;
    }
    select {
        appearance: none;
        border: 0;
        outline: 0;
        background: none;
        color: inherit;
        box-shadow: none;
    }
    select::-ms-expand {
        display: none;
    }
    button{
        width: 100%;
        margin-top: 10px;
        height: 25%;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }
    button:hover{
        background-color: #2c3e50;
        color: white;
        transition: 1s;
        cursor: pointer;
    }
    option{
        color: black;
    }
    .select {
        position: relative;
        display: flex;
        width: min(20rem, 90vw);
        background: var(--background-select);
        border-radius: 0.25rem;
        overflow: hidden;
        select {
            flex: 1;
            padding: 1em;
            cursor: pointer;
        }
        &::after {
            content: "\25BC";
            position: absolute;
            right: 1rem;
            top: 1rem;
            transition: 0.25s all ease;
            pointer-events: none;
        }
        &:hover::after {
            color: #f39c12;
            animation: bounce 0.5s infinite;
        }
    }
    @keyframes bounce {
        25% {
            transform: translatey(5px);
        }
        75% {
            transform: translatey(-5px);
        }
    }
</style>