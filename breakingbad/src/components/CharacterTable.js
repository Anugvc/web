import React, { useEffect, useState } from 'react';
import { useHistory } from 'react-router-dom';
import { makeStyles } from '@material-ui/core/styles';
import {
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Paper,
  Avatar,
  Grid,
  Typography,
  TablePagination,
  TableFooter
} from '@material-ui/core';

import axios from 'axios';
import './CharacterTable.css';



const useStyles = makeStyles((theme) => ({
  table: {
    minWidth: 650,
  },
  tableContainer: {
    borderRadius: 15,
    margin: '10px 10px',
    maxWidth: 950
  },
  tableHeaderCell: {
    fontWeight: 'bold',
    backgroundColor: 'indigo',
    color: 'lightgrey'
  },
  tableRow: {
    "&:hover": {
      backgroundColor: "blue"
    },
  },
  avatar: {
    backgroundColor: theme.palette.primary.light,
    color: theme.palette.getContrastText(theme.palette.primary.light)
  },
  name: {
    fontWeight: 'bold',
    color: theme.palette.secondary.dark
  },
  status: {
    fontWeight: 'bold',
    fontSize: '0.75rem',
    color: 'white',
    backgroundColor: 'grey',
    borderRadius: 8,
    padding: '3px 10px',
    display: 'inline-block'
  }
}));

const CharacterTable = () => {

  const [character, setCharacter] = useState([]);
  const [page, setPage] = useState(0);
  const [rowsPerPage, setRowsPerPage] = useState(10);

  const handleChangePage = (event, newPage) => {
    setPage(newPage);
  };

  const handleChangeRowsPerPage = (event) => {
    setRowsPerPage(+event.target.value);
    setPage(0);
  };

  const history = useHistory();

  const classes = useStyles();
  const getApi = async () => {
    try {
      const data = await axios.get("https://breakingbadapi.com/api/characters");
      console.log(data.data);
      setCharacter(data.data);
    } catch (e) {
      console.log(e);
    }
  };

  useEffect(() => {
    getApi();
  }, []);



  return (

    <div className="table-container">
      <TableContainer component={Paper} className={classes.tableContainer}>
        <Table className={classes.table} aria-label="simple table">
          <TableHead>
            <TableRow>
              <TableCell className={classes.tableHeaderCell}>Name</TableCell>
              <TableCell className={classes.tableHeaderCell}>Occupation(s)</TableCell>
              <TableCell className={classes.tableHeaderCell}>Status</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {character.slice(page * rowsPerPage, page * rowsPerPage + rowsPerPage).map((row) => (

              <TableRow
                hover
                // component={Link} to={`/Details/`}
                onClick={event => {
                  history.push({
                    pathname: '/details',
                    state: { id: row.char_id, charName: row.name}
                  })
                }}
                tabIndex={-1}

                key={row.char_id}>
                <TableCell>
                  <Grid container>
                    <Grid item lg={2}>
                      <Avatar alt={row.name} src='.' className={classes.avatar} />
                    </Grid>
                    <Grid item lg={10}>
                      <Typography className={classes.name}>{row.name}</Typography>
                      <Typography color="textSecondary" variant="body2">Date of Birth: {row.birthday}</Typography>
                      <Typography color="textSecondary" variant="body2">Also known as: <text style={{ fontWeight: "bold" }}>{row.nickname}</text></Typography>
                    </Grid>
                  </Grid>
                </TableCell>
                <TableCell>
                  <Typography color="primary" variant="subtitle2">{row.occupation[0]}</Typography>
                  <Typography color="textSecondary" variant="subtitle2">{row.occupation[1]}</Typography>
                </TableCell>
                <TableCell>
                  <Typography
                    className={classes.status}
                    style={{
                      backgroundColor:
                        ((row.status === 'Alive' && '#00a152') ||
                          (row.status === 'Deceased' && '#ff1744'))
                    }}
                  >{row.status}</Typography>
                </TableCell>


              </TableRow>


            ))}
          </TableBody>
          <TableFooter>
            <TablePagination
              rowsPerPageOptions={[10, 20]}
              component="div"
              count={character.length}
              rowsPerPage={rowsPerPage}
              page={page}
              onChangePage={handleChangePage}
              onChangeRowsPerPage={handleChangeRowsPerPage}
            />
          </TableFooter>
        </Table>
      </TableContainer>
    </div>

  );


};

export default CharacterTable;